# foxAdmin

## Jak vygenerovat data
- Aplikace má upravené DatabaseSeeder a Factory classy na vygenerování dat.
- Musíte prvně upravit .env soubor podle vaší databáze.
- Pak jen stačí zapsat: `php artisan migrate:fresh --seed`
- Aplikace migruje data a vyrobí data pro databázi.
- Spustit ji pak můžete s: `php artisan serve`
