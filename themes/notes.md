## back of dw post

```
cp -r ~/Sites/dw/exitwp/build/jekyll/devilsworkshop.org/ .
```

## Command to convert `author` to taxonomy. Multiple authors can be supported

Replacement string must match `config.yaml` plural form

```
find content -name "*.markdown" -type f -exec sed -i -e $'s/author:\ /author:\\\n- /g' '{}' \;
```

Or

```
find content -name "*.markdown" -type f -exec sed -i -e $'s/author:\ /authors:\\\n- /g' '{}' \;
```


## Remove First line from markdown files

```
find content -name "*.markdown" -type f | xargs sed -i -e 1d
find content -name "*.markdown" -type f -exec sed -i -e 1d '{}' \;
```

## List Tags function in

```
    <!-- <span class="post-date">Tags: {{range .Params.tags}} <a href="/tags/{{. | urlize }}">{{.}}</a>,{{end}}</span> -->
```

## Google Custom Search

Target page

```
<gcse:searchbox-only resultsUrl="two-page_results_elements_v2.html"></gcse:searchbox-only>
```

## Make author name indexable

```
find content -name "*.markdown" -type f -exec sed -i -e $'s/author:\ /author:\\\n- /g' '{}' \;
```

Search and replace unwanted characters from author names

```
find content -name "*.markdown" -type f -exec sed -i -e 's/rahul.bansal/rahulbansal/g' '{}' \;
find . -name "*.markdown" -type f -exec sed -i -e 's/mk.nikhilvijay@gmail.com/mk.nikhilvijay/g' '{}' \;
find . -name "*.markdown" -type f -exec sed -i -e 's/mk.nikhilvijay/mknikhilvijay/g' '{}' \;
find . -name "*.markdown" -type f -exec head -n 3 '{}' \;
```
