# Autoskolas administrācijas sistēma
Autoskolas administrācijas sistēmas ir tīmekļa lietojumprogramma, kas izstrādāta, izmantojot **Laravel** ietvaru ar **Filament** administrācijas paneļa ietvaru. <br>

## Par projektu
Autoskolas administrācijas sistēma ir risinājums, kas paredzēts autoskolas iekšējai lietošanai. Sistēma centralizē un atvieglo ikdienas administratīvos procesus - kursantu reģistrāciju, grupu pārvaldību, nodarbību plānošanu un instruktoru uzskaiti, uzlabojot datu pārskatāmību, ietaupot laiku, samazinot manuālu darbu un kļūdu risku. <br>
Sistēma izstrādāta ar mērogojamību prātā un kalpo arī kā pamats turpmākai sistēmas paplašināšanai, piemēram pieteikumu sistēmai vai publiskās mājaslapas integrācijai.

---

## Izmantotās tehnoloģijas 
![PHP](https://img.shields.io/badge/PHP-8.3+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-13.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Filament](https://img.shields.io/badge/Filament-5.x-F59E0B?style=for-the-badge)
![Composer](https://img.shields.io/badge/Composer-2.7+-885630?style=for-the-badge&logo=composer&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-3.x-003B57?style=for-the-badge&logo=sqlite&logoColor=white)
![Pest](https://img.shields.io/badge/Pest-4.x-F23B3B?style=for-the-badge)
---

## Prasības
Lai nodrošinātu sistēmas darbību lokālajā vidē, nepieciešamas šādas tehnoloģijas:

- **PHP -** v8.3+ <br>
- **Composer -** v2.7+ <br>
- **PHP paplašinājumi -** `sodium`, `sqlite`, `xsl`

## Instalācija un palaišana
###  1. Klonēt repozitoriju no GitHub pārvaldnieka

```bash
git clone https://github.com/annpronina/autoskola-backend
```

### 2. Pāriet uz projekta direktoriju
```bash
cd autoskola-backend
```

###  3. Instalēt projekta atkarības

```bash
composer install
```

### 4. Izveidot vides konfigurācijas (.env) failu
```bash
cp .env.example .env
```

### 5. Ģenerēt lietotnes šifrēšanas atslēgu
```bash
php artisan key:generate
```

## Migrācijas un datu sagatavošana
### Kad `.env` fails ir konfigurēts, nepieciešams izveidot datubāzes tabulas un aizpildīt tos ar sākotnējiem datiem:
```bash
php artisan db --seed
```
### Lokāla servera palaišana
```bash
php artisan serve
```
### Testēšana

Lai palaistu testus:

```bash
php artisan test
```

### Piekļuve adminstrācija panelim
Pēc servera palaišanas administrācijas panelis pieejams:
```bash
http://127.0.0.1:8000/admin
```

### Pieteikšanas sistēmā
Autorizēties sistēmā iespējams, izmantojot šos pieteikšanas datus:
- E-pasta adrese: admin@example.com;
- Parole: password
---

## Funkcionalitāte

| Modulis | Apraksts |
|---|---|
|**Sākuma lapa** | Pārskats par jaunākajiem kursantiem, grupām un nodarbībām |
|**Kursanti** | Reģistrācija, personas dati, piesaiste grupām un kategorijām |
|**Grupas** | Teorijas grupu izveide, statusa pārvaldība, nodarbību skaita kontrole |
|**Teorijas nodarbības** | Nodarbību plānošana ar kārtas numuru un laika intervālu |
|**Braukšanas nodarbības** | Nodarbību grafiks, instruktora un kursanta piesaiste |
|**Teorijas pasniedzēji** | Pasniedzēju reģistrs ar kategoriju piesaisti |
|**Braukšanas instruktori** | Instruktoru pārvaldība, transportlīdzekļu un kategoriju piesaiste |
|**Transportlīdzekļi** | Transporta reģistrs ar tehniskajiem parametriem |
|**Kategorijas** | Braukšanas kategoriju (A, AM, A1, A2, ADR, B, BE) parvaldība |

---
## Sistēmas struktūra
```
autoskola-backend/
├── app/
│   ├── Filament/          # Administrācijas paneļa resursi, lapas, formas, tabulas un logrīki
│   └── Models/            # Eloquent modeļi
├── database/
│   ├── factories/         # Modeļu rūpnīcas testa datiem
│   ├── migrations/        # Datubāzes migrācijas
│   └── seeders/           # Sākotnējo datu seederi
```

## Autors
Anna Proņina<br>
Ventspils Tehnikums <br>
PT-2022<br>

