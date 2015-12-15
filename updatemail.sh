echo "<b> <font color=" '"red"' ">" > data.tmp
date >> data.tmp
echo "</font> </b>" >> data.tmp
cat new_mail.txt >> data.tmp
cat data.txt >> data.tmp
mv data.tmp data.txt 
