@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/commonmark
php "%BIN_TARGET%" %*
