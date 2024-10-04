<?php
// This a work around because I can't seems to make github actions to work with the original folder name
function convertToUpperCase($folderName) {
    $parts = explode('_', $folderName);
    
    if (count($parts) === 2) {
        $parts[1] = strtoupper($parts[1]);
    }
    
    return implode('_', $parts);
}