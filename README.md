# WCCF Mega Church Landing Page

Official landing website for **West Nile Christian Community Fellowship (WCCF)** — a faith-based umbrella organization uniting over 70 churches across the West Nile region of Uganda.

This site is centered on the **Mega Church Building Fundraising Campaign** (goal: UGX 5 Billion) and serves as the digital home for the fellowship's news, events, gallery, and donation drives.

## Tech Stack

- **[Laravel 13](https://laravel.com)** — PHP framework
- **[Livewire 4](https://livewire.laravel.com)** — Dynamic UI components
- **[AlpineJS](https://alpinejs.dev)** — Client-side interactivity (sliders, lightbox, mobile menu)
- **[TailwindCSS v4](https://tailwindcss.com)** — Utility-first styling
- **[Volt](https://livewire.laravel.com/docs/volt)** — Single-file components
- **[MySQL](https://www.mysql.com)** — Database
- **[Vite](https://vitejs.dev)** — Asset bundling

## Brand

| Token          | Value       | Usage              |
|----------------|-------------|--------------------|
| `wccf-primary` | `#5f0138`   | Deep burgundy      |
| `wccf-dark`    | `#430027`   | Darker shade       |
| `wccf-gold`    | `#D4AF37`   | Accents / CTAs     |
| `wccf-bg`      | `#FAF8F9`   | Background         |
| `wccf-text`    | `#222222`   | Body text          |
| `wccf-gray`    | `#666666`   | Muted text         |

### Fonts

- **Headings**: Cormorant Garamond (`font-heading`)
- **Body / Nav**: Inter (`font-sans`)

## Pages

| Route          | Description                               |
|----------------|-------------------------------------------|
| `/`            | Home — hero slider, gallery, donate CTA   |
| `/about`       | History, leadership, mega church project  |
| `/members`     | Member churches directory                 |
| `/events`      | Upcoming conferences, fellowships, galas  |
| `/gallery`     | Photo gallery with lightbox               |
| `/resources`   | Sermons, teachings, study guides          |
| `/news`        | Blog posts with full article pages        |
| `/donate`      | Giving options, bank details, progress    |
| `/contact`     | Contact form and map                      |

## Getting Started

```bash
# Clone the repo
git clone https://github.com/omaadonyo/wccf-landing.git
cd wccf-landing

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Copy environment file
cp .env.example .env
php artisan key:generate

# Configure your database in .env then run:
php artisan migrate --seed

# Build frontend assets
npm run build

# Start the dev server
php artisan serve
```

## Development

```bash
# Watch assets with Vite
npm run dev

# Compile for production
npm run build
```

## License

This project is developed for WCCF. All rights reserved.
