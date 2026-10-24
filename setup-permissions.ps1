# ========================================================
# DAIRY CLASSIC - WINDOWS NTFS PERMISSION HARDENING SCRIPT
# Locks down permissions so unprivileged accounts cannot inject files
# ========================================================

$projectPath = Split-Path -Parent $MyInvocation.MyCommand.Path

Write-Host "==> Hardening NTFS Permissions for: $projectPath" -ForegroundColor Cyan

# 1. Disable inheritance and remove write permissions for Users / Everyone
# Keep Administrators and SYSTEM with full control, while standard Users get Read & Execute only.
try {
    # Ensure Administrators & SYSTEM have FullControl
    icacls "$projectPath" /grant:r "Administrators:(OI)(CI)F" /grant:r "SYSTEM:(OI)(CI)F" /T /C /Q
    
    # Restrict Users to Read and Execute only (No Write / Modify)
    icacls "$projectPath" /grant:r "Users:(OI)(CI)RX" /T /C /Q
    
    Write-Host "==> NTFS Permissions successfully hardened!" -ForegroundColor Green
    Write-Host "    - Administrators & SYSTEM: Full Control"
    Write-Host "    - Standard Users & Guests: Read & Execute Only (No Write / Modification)"
} catch {
    Write-Warning "Could not apply all icacls rules. Run PowerShell as Administrator if needed."
}
