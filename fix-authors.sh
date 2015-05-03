for author in data/authors/*.toml; do
    echo $author
    filename="${author##*/}"
    username=${filename%.toml}
    echo $username
    # name=$(echo $author | cut -d'/' -f3 | cut -d'toml' -f2)
    strn=$(grep display_name $author | cut -d'=' -f2 | cut -d'"' -f2)
    echo $strn
    # replace
    find content -name "*.md" -type f -exec sed -i -e $'s/author:\ \"$strn\"\/\"$username\"/g' '{}' \;
done
