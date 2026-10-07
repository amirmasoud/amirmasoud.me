# amirmasoud.me

Personal blog — Hugo static site, deployed to GitHub Pages. Mixed-content personal
journal: restaurant reviews, motorcycle/cycling rides, photography, book notes,
short personal entries, and a handful of older technical tutorials carried over
from a WordPress install.

## Stack

- **Hugo** (extended) — local is v0.140.0, CI pins `HUGO_VERSION: 0.137.1`
- **Theme**: [ananke](https://github.com/theNewDynamic/gohugo-theme-ananke) as a git
  **submodule** at `themes/ananke`. Never edit files under `themes/` — override in
  `layouts/` instead.
- **Hugo module**: `github.com/hugomods/images` (imported in `hugo.toml`)
- Config is `hugo.toml` (TOML), not `config.yaml`

Local preview: `hugo server`. The analytics snippet in
`layouts/partials/head-additions.html` is suppressed when `baseURL` is
`http://localhost:1313/`.

## Deploy

`.github/workflows/hugo.yaml` builds and deploys to GitHub Pages on every push to
`main` (or manual `workflow_dispatch`). There is no staging environment — a push to
`main` is a publish. The build runs with `TZ: America/Denver`.

## Writing a post

Create the file directly at `content/posts/YYYY-MM-DD-kebab-slug.md`. The
`archetypes/default.md` archetype exists but does not match the house front-matter
style, so `hugo new` output needs rewriting anyway — just write the file.

Front matter (YAML, `---` delimited):

```yaml
---
title: Short Title / Optional Subtitle
author: Amirmasoud
type: post
date: 2025-07-12T20:00:00-06:00
url: /2025/07/12/short-slug
categories:
  - Story
featured_image: /2025/07/photo_1.jpeg
summary: One or two sentences; shown on list pages.
---
```

- `url` is **always** set explicitly as `/YYYY/MM/DD/slug` — it preserves the
  permalinks inherited from WordPress. It must match the post date. Do not drop it.
- `author: Amirmasoud` and `type: post` on every post.
- `summary` on every post (older imported tutorials predate the convention and lack
  it — leave those alone).
- `featured_image` points at the hero shot; it drives list-page thumbnails via
  `layouts/_default/summary-with-image.html`.
- `tags` is **legacy** — only the 2019–2020 imported posts use it. Don't add tags to
  new posts; use `categories`.

### Dates and time zones

Dates are **local Salt Lake City time** with the correct Mountain offset: `-07:00`

### Categories

Pick from the existing set rather than inventing one. Current use:

`Story` (18) · `Food` (6) · `Video` (4) · `Learning` (4) · `Books` (4) ·
`DevOps` (3) · `Workouts` (2) · `Tweet` (2) · `Projects` · `Photography` ·
`Movies` · `Managing`

Rough mapping: `Story` is the catch-all for outings, rides, photos and daily life;
`Food` for restaurant and drink write-ups; `Video` when a YouTube embed is the
point; `Tweet` for short, personal, unillustrated entries; `Learning`/`DevOps`/
`Projects` for the technical posts.

## Images

- Live in `static/YYYY/MM/` matching the post date — e.g. `static/2025/07/steak_1.jpeg`.
  Referenced from the post as root-relative paths (`/2025/07/steak_1.jpeg`); the
  `static/` prefix is not part of the URL.
- Older imported images sit under `static/wp-content/uploads/YYYY/MM/`,
  `static/photography/`, `static/books/`, `static/stories/` and bare `static/05/`.
  Leave those paths as they are.
- House style is a **clickable full-size image**, one per line, often several in a row:

  ```markdown
  [![Alt text describing the photo](/2025/07/steak_1.jpeg)](/2025/07/steak_1.jpeg)
  *Optional italic caption*
  ```

- Write real descriptive alt text, not the post title repeated.

## Shortcodes

- `{{< youtube id="x-EgO9kpsso" >}}` — Hugo built-in, used in `Video` posts.
- `{{< video "/2025/06/clip.mp4" >}}` — local override at
  `layouts/shortcodes/video.html`, renders a full-width `<video controls>`.

## Layout overrides

Only five files in `layouts/`, all deliberate overrides of ananke:

- `_default/summary.html`, `_default/summary-with-image.html` — list-page cards,
  both patched to render `partials/categories.html`
- `partials/categories.html` — the `#category` links under a post title
- `partials/head-additions.html` — Umami analytics, skipped on localhost
- `shortcodes/video.html` — local MP4 player

Styling is [Tachyons](https://tachyons.io/) utility classes (ananke's convention) —
match the surrounding classes rather than adding custom CSS.

## Workflow preferences

- **Write files only.** Create/edit the markdown and move images into place, then
  stop for review. Do not commit, and do not push — a push to `main` publishes.
- Skip running `hugo server`; Amirmasoud previews locally. A plain `hugo --gc`
  build check is fine when a change is broad enough to risk breaking the build.
- Drafting prose is welcome — writing a full post from a short description is in
  scope. Match the voice of the target category: reviews are first-person,
  specific and detailed (what was ordered, the price, the atmosphere, a
  recommendation, location and website links); ride posts are terse with bike,
  date and duration; `Tweet` posts are plain and personal.
- Commit messages in this repo are short and plain: "New post", "New story",
  "New video", "Fix date".
