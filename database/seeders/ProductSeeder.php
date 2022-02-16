<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Apple HomePod mini Space',
            'code' => 'portable',
            'description' => 'Smart колонка • Wi-Fi: 802.11n Wi-Fi • Bluetooth: Bluetooth 5.0 • 10.2020 • Модель из линейки HomePod mini',
            'price' => 14200
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Xiaomi Mi Dual Mode Mouse',
            'code' => 'portable',
            'description' => 'Мышь • Для настольных ПК, для ноутбуков • беспроводное подключение • радиоинтерфейс, Bluetooth • сенсор: оптический • разрешение, dpi: 1300 • 09.2020',
            'price' => 800
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Logitech MX Master',
            'code' => 'portable',
            'description' => 'Мышь • для ноутбуков • беспроводное подключение • радиоинтерфейс • сенсор: оптический • разрешение, dpi: 1000 • 09.2020',
            'price' => 400
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'ASUS ROG Flow Z13 2022',
            'code' => 'portable',
            'description' => 'Ноутбук • 2-в-1 трансформер • 13,4" • IPS-level • 1920x1200 • Intel Core i9-12900H • 2.5 ГГц • ОЗУ: 16 ГБ • NVIDIA GeForce RTX 3050 Ti, 4 ГБ GDDR6 • SSD: 1000 ГБ • 1,18 кг • ОС: Windows 11 Home • цвет: черный • 02.2022 • Модель из линейки ROG Flow Z13 2022 GZ301',
            'price' => 66800
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Samsung Galaxy S21 FE 5G',
            'code' => 'mobiles',
            'description' => 'Смартфон • 2 SIM • экран: 6,4" • AMOLED • 2400x1080 • встроенная память: 256 ГБ • оперативная память: 8 ГБ • процессор: Qualcomm Snapdragon 888 • ОС: Android 11 • аккумулятор: 4500 мАч (несъемная) • камера: 12 (f/1.8, широкоугольная) + 12 (f/2.2, ... • цвет: фиолетовый • NFC',
            'price' => 22790
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Samsung Galaxy A52 8/256GB',
            'code' => 'mobiles',
            'description' => 'Смартфон • 2 или 1 + карта памяти SIM • экран: 6,5" • Super AMOLED • 2400x1080 • встроенная память: 256 ГБ • оперативная память: 8 ГБ • процессор: Qualcomm Snapdragon 720G • ОС: Android 11 • аккумулятор: 4500 мАч (несъемный) • камера: 64 (f/1.8) + 12 (f/2.2, ... • цвет: черный • NFC: + • 03.2021 • Модель из линейки Galaxy A52',
            'price' => 14790
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Samsung Galaxy M12 4/64GB',
            'code' => 'mobiles',
            'description' => 'Смартфон • 2 SIM • экран: 6,5" • PLS • 1600x720 • встроенная память: 64 ГБ • оперативная память: 4 ГБ • процессор: Samsung Exynos 850 + Mali-G52 • ОС: Android 11 • аккумулятор: 5000 мАч (несъемная) • камера: 48 (f/2.0) + 5 (f/2.2) + 2 (f/2.4) + 2 (f/2.4) Мп • цвет: черный • NFC',
            'price' => 4500
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'HUAWEI P40 lite 6/128GB Green ',
            'code' => 'mobiles',
            'description' => 'Смартфон • 2 или 1 + карта памяти SIM • экран: 6,4" • IPS • 2310x1080 • встроенная память: 128 ГБ • оперативная память: 6 ГБ • процессор: Kirin 810 • ОС: Android 10 • аккумулятор: 4000 мАч (несъемная) • камера: 48 (широкоугольная, f/1.8) + 8 (широкоугольная) + 2 (макро) + 2 (боке) Мп • цвет: зеленый • NFC',
            'price' => 4800
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'HUAWEI Nova 9/128GB Black',
            'code' => 'mobiles',
            'description' => 'Смартфон • 2 SIM • экран: 6,57" • OLED • 2340x1080 • встроенная память: 128 ГБ • оперативная память: 8 ГБ • процессор: Qualcomm Snapdragon 778G • ОС: Android • аккумулятор: 4300 мАч (несъемная) • камера: 50 (f/1.9, широкоугольная) + 8 (f/2.2, ... • цвет: черный • NFC: + • 11.2021 • Модель из линейки Nova 9',
            'price' => 15200
        ]);

        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Indesit IWUC 40851',
            'code' => 'appliances',
            'description' => 'Стиральная машина автоматическая • отдельностоящая • A+ • загрузка белья: 4 кг • отжим: 800 об/мин • класс отжима: D • белый • 02.2015',
            'price' => 6500
        ]);

        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Electrolux EW6S426BUI',
            'code' => 'appliances',
            'description' => 'Стиральная машина автоматическая • отдельностоящая • A+ • загрузка белья: 4 кг • отжим: 800 об/мин • класс отжима: D • белый • 02.2015',
            'price' => 8200
        ]);

        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Samsung WF60F1R2E2WDUA',
            'code' => 'appliances',
            'description' => 'Стиральная машина автоматическая • отдельностоящая • A+ • загрузка белья: 4 кг • отжим: 800 об/мин • класс отжима: D • белый • 02.2015',
            'price' => 6200
        ]);

        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'LG F2J6HG0WR',
            'code' => 'appliances',
            'description' => 'Стиральная машина автоматическая • отдельностоящая • A+ • загрузка белья: 4 кг • отжим: 800 об/мин • класс отжима: D • белый • 02.2015',
            'price' => 7100
        ]);
    }
}
