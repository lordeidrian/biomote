# BioMote Laravel Application - AI Coding Guidelines

## Project Overview
BioMote is a Laravel 12 application with Filament 3 admin panel for managing a blog, videos, campaigns, and contact submissions. It includes a static HTML site in `estatico/biomote/` and uses TailwindCSS for styling.

## Architecture
- **Framework**: Laravel 12 with Eloquent ORM
- **Admin Panel**: Filament 3 for CRUD operations on Posts, Categories, Tags, Videos, Campaigns, ContactSubmissions
- **Frontend**: Blade templates with TailwindCSS (via Vite)
- **Mail**: Queued emails for contact submissions
- **Database**: Standard Laravel migrations with relationships (belongsTo, hasMany, belongsToMany)

## Key Models & Relationships
- `Post` belongsTo `Category`, belongsToMany `Tag`
- `Category` hasMany `Post`
- `Tag` belongsToMany `Post`
- `Video` standalone with YouTube URL parsing
- `Campaign` hasMany `ContactSubmission`, tracks visit_count
- `ContactSubmission` belongsTo `Campaign`, casts activity_options to array

## Development Workflows
- **Setup**: Run `composer run setup` (installs deps, copies .env, generates key, migrates, npm install/build)
- **Development**: Use `composer run dev` for concurrent server (artisan serve), queue listener, logs (pail), and Vite dev
- **Build**: `npm run build` for production assets
- **Testing**: `composer run test` (clears config, runs PHPUnit with in-memory SQLite)
- **Migrations**: Standard `php artisan migrate` after schema changes

## Coding Patterns
- **Slugs**: Auto-generate from title/name using `Str::slug()` in Filament forms with live updates
- **Filament Resources**: Use `Select::relationship()` with `searchable()`, `preload()`, and `createOptionForm()` for related models
- **Controllers**: Eager load relationships (`with(['category', 'tags'])`), filter by published_at, paginate results
- **Validation**: Inline in controllers with `validate()`, including array fields like `activity_options.*`
- **Mail**: Use Mailable classes with Queueable, send to `info@biomote.com.py`, reply-to submission email
- **Error Handling**: Log mail failures but continue user flow
- **Views**: Pass compact variables, use sidebar components for categories/tags/recent posts

## File Structure Conventions
- Models in `app/Models/` with fillable arrays and casts
- Filament resources in `app/Filament/Resources/` with Pages and RelationManagers subdirs
- Controllers in `app/Http/Controllers/` for public routes
- Blade views in `resources/views/` with dot notation (e.g., `pages.products.hb2`)
- Migrations in `database/migrations/` with timestamps
- Static assets in `public/` and built via Vite from `resources/`

## Integration Points
- **YouTube Videos**: Parse video ID from URL in `Video` model accessor
- **Campaign Tracking**: Increment `visit_count` on campaign page views
- **Contact Forms**: Validate activity_type enum, send queued mail with source in subject
- **Static Site**: Separate HTML files in `estatico/biomote/` for landing pages

## Examples
- **Slug Generation**: `->live(onBlur: true)->afterStateUpdated(fn ($state, Set $set) => $set('slug', Str::slug($state)))`
- **Relationship Select**: `Select::make('category_id')->relationship('category', 'name')->searchable()->preload()`
- **Eager Loading**: `$posts = Post::with(['category', 'tags'])->whereNotNull('published_at')->paginate(9)`
- **Mail Subject**: `'Nuevo Contacto BioMote' . ($source ? " - " . strtoupper($source) : "")`</content>
<parameter name="filePath">/var/www/html/biomote/.github/copilot-instructions.md
