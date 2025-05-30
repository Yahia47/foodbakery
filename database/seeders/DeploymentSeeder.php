<?php

namespace Database\Seeders;

use App\Models\CuisineType;
use App\Models\Dish;
use App\Models\Menu;
use App\Models\OpeningHour;
use App\Models\PhotoGallery;
use App\Models\Restaurant;
use App\Models\Review;
use App\Models\ReviewResponse;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class DeploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = json_decode(File::get(database_path('data/restaurants.json')), true);
        if (isset($restaurants)) {
            foreach ($restaurants as $entry) {
                $userData = [
                    'name'     => $entry['user']['name'],
                    'password' => Hash::make($entry['user']['password'] ?? 'user'),
                    'role'     => User::ROLE_RESTAURANT,
                ];

                if (!empty($entry['user']['email'])) {
                    $userData['email'] = $entry['user']['email'];
                }

                $user = User::factory()->create($userData);

                $restaurant = Restaurant::factory()->create(array_merge($entry['restaurant'], [
                    'is_popular' => $entry['restaurant']['is_popular'] ?? false,
                    'is_featured' => $entry['restaurant']['is_featured'] ?? false,
                    'user_id' => $user->id,
                ]));

                if (isset($entry['cuisines'])) {
                    $restaurant->cuisines()->attach($entry['cuisines']);
                }

                if (isset($entry['menus'])) {
                    foreach ($entry['menus'] as $menuData) {
                        $menu = Menu::factory()->create([
                            'restaurant_id' => $restaurant->id,
                            'name' => $menuData['name']
                        ]);

                        if (isset($menuData['dishes'])) {
                            foreach ($menuData['dishes'] as $dishData) {
                                Dish::factory()->create([
                                    'menu_id' => $menu->id,
                                    'name' => $dishData['name'],
                                    'description' => $dishData['description'],
                                    'price' => $dishData['price'],
                                    'dish_image' => $dishData['dish_image'] ?? null,
                                ]);
                            }
                        }
                    }
                }

                if (!empty($entry['gallery_images']) || $entry['gallery_images'] == 0) {
                    for ($i = 1; $i <= $entry['gallery_images']; $i++) {
                        PhotoGallery::create([
                            'restaurant_id' => $restaurant->id,
                            'image_url'     => "{$entry['gallery_path']}/gallery-image-$i.jpg",
                            'is_thumbnail' => !empty($entry['thambnail']) && ($i == $entry['thambnail']) ? true : false,
                        ]);
                    }
                }

                Review::factory(rand(30, 50))->make([
                    'restaurant_id' => $restaurant->id,
                ])->each(function ($review) {
                    $review->rating = fake()->randomElement([5, 5, 5, 4, 2]);
                    $review->save();

                    if (rand(0, 1)) {
                        ReviewResponse::factory()->create([
                            'review_id' => $review->id,
                        ]);
                    }
                });
            }
        }
    }
}
