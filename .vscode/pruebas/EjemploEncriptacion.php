<?php
// 16 character salt starting with $5$. The default number of rounds is 5000.
if (CRYPT_SHA256 == 1)
{
echo "SHA-256: ".crypt('somethingis','$6$rounds=5000$anexamplevvsdfdtringforsalt$')."\n<br>"; }
else
{
echo "SHA-256 not supported.\n<br>";
}