import os
print("\n\033[32;1mUpdating Wordlist...\n\n\033[0m")
os.system('mv wordlist.txt wordlist_old.txt')
os.system('wget https://raw.githubusercontent.com/LanangAkira/Wp-Install-Finder/main/wordlist.txt --no-check-certificate')
os.system('mv wordlah.txt wordlah_old.txt')
os.system('wget https://raw.githubusercontent.com/LanangAkira/Wp-Install-Finder/main/wordlah.txt --no-check-certificate')
print("\033[32;1mUpdate Wordlist Success\n\033[0m")
