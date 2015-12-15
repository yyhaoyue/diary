while true
do
    python mailr.py
    cmp new_mailX.txt new_mail.txt || cp new_mail.txt  new_mailX.txt
    sleep 4
done
