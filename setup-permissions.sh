#!/usr/bin/env bash
# ========================================================
# DAIRY CLASSIC - PRODUCTION FILE & FOLDER PERMISSION HARDENING
# Prevents code tampering, web-shell injection, and malware upload.
# ========================================================

set -euo pipefail

TARGET_DIR="${1:-$(pwd)}"
WEB_USER="${2:-www-data}"
APP_USER="${3:-$(whoami)}"

echo "==> Hardening permissions in: ${TARGET_DIR}"
echo "    App User (Owner): ${APP_USER}"
echo "    Web Server Group: ${WEB_USER}"

# 1. Ensure owner is deployment user, group is webserver
if [ "$(id -u)" -eq 0 ]; then
    chown -R "${APP_USER}:${WEB_USER}" "${TARGET_DIR}"
fi

# 2. Set directory permissions to 755 (rwxr-xr-x)
# Allows directory traversal and reading, but prevents unauthorized file creation
find "${TARGET_DIR}" -type d -exec chmod 755 {} +

# 3. Set file permissions to 644 (rw-r--r--)
# Allows reading by webserver, but writable ONLY by owner (not webserver)
find "${TARGET_DIR}" -type f -exec chmod 644 {} +

# 4. Protect script files
if [ -f "${TARGET_DIR}/setup-permissions.sh" ]; then
    chmod 750 "${TARGET_DIR}/setup-permissions.sh"
fi

# 5. Lock down .htaccess files
find "${TARGET_DIR}" -name ".htaccess" -exec chmod 644 {} +

echo "==> Hardening completed successfully!"
echo "    - Directories set to: 755"
echo "    - Files set to: 644"
echo "    - Web server cannot overwrite or inject code into any PHP/HTML files."
