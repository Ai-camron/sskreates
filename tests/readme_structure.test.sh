#!/usr/bin/env bash
set -euo pipefail
missing=0
for section in \
  "Website Purpose" \
  "Core Brand Identity" \
  "Shop Category Master List" \
  "Accessibility Standards" \
  "Component Library" \
  "Interaction Rules" \
  "Design Philosophy" \
  "Integration Notes"; do
  if ! grep -q "$section" README.md; then
    echo "Missing section: $section"
    missing=1
  fi
done
if [ "$missing" -ne 0 ]; then
  echo "README is missing required sections." >&2
  exit 1
fi
echo "README structure looks good."
