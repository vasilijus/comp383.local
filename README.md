## About Project
```
composer install
```
### Breeze setup:
```
composer require laravel/breeze --dev
php artisan breeze:install
```
```
npm install
npm run dev
```
```
php artisan migrate
php artisan db:seed
```

test admin: admin@test.com / Password: admin
test user : test@test.com /  Password: test

### Tinker

Create row 
$bb = new App\Models\Bb();
$bb->title = 'shkaf';
$bb->content = 'Good wardrobe';
$bb->price = 2000;
$bb->save();

use App\Models\Bb();
$bb = $bb->create(['title' => 'hoover', 'content' => 'good hoover', 'price' => 1222]);
OR
$bb = Bb::create(['title' => 'hoover', 'content' => 'good hoover', 'price' => 1222]);

// Search 
$bb->find(2) // Search ID key
// Change value
$bb->price = 22;
$bb->save();
// Order by
$bbs = Bb::orederBy('price')->get();
foreach($bbs as $bb) { echo $bb->price, ' \r\n'; }

### Adding a user ID to listing
>>> use Illшninate\Support\Facades\Hash;
>>> use App\Models\User;
>>> $user = User::create(['name' => 'admin', 'email' => 'admin@bboard.ru', 'password' => Hash: :make ('admin')]);
- Добавим объявление от имени этого пользователя:
>>> use App\Models\Bb;
>>> $ЬЬ = new ВЬ();
>>> $bb->title = 'Пылесос';
>>> $bb->content = 'Старый, ржавый, без шланга';
>>> $bb->price = 500;
>>> $user->bbs()->save($bb);
---
>>> $user->bbs()->create(['title' => 'Грузовик',
'content' => 'Грузоподъемность - 5 т',
'price' => 10000000]);
---
$ЬЬ = new use App\Models\Bb(['title' => 'Шкаф',
'content' => 'Совсем новый, полированный, двухстворчатый',
'price' => 1000]);
>>> $bb->user()->associate($user);
>>> $bb->save();

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
