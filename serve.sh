#!/usr/bin/env bash
# Spin up a temporary PHP server (in Docker) for testing the site locally.
#
#   ./serve.sh          -> http://localhost:8000
#   ./serve.sh 9000     -> http://localhost:9000
#
# Serves ./docs read-only. Edits show up on refresh. Ctrl+C stops and removes
# the container.
set -euo pipefail

PORT="${1:-8000}"
ROOT="$(cd "$(dirname "$0")" && pwd)/docs"

echo "Serving $ROOT at http://localhost:$PORT  (Ctrl+C to stop)"
echo "  e.g. http://localhost:$PORT/f26/courses/itd110/competencies/"

TTY=(); [ -t 0 ] && TTY=(-it)

exec docker run --rm "${TTY[@]}" \
    --name "ict-php-$PORT" \
    -p "127.0.0.1:$PORT:8000" \
    -v "$ROOT:/srv:ro" \
    -w /srv \
    php:8-cli \
    php -S 0.0.0.0:8000 -t /srv
