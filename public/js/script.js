function formatRupiah(t,r){var a=t.toString().replace(/[^,\d]/g,"").split(","),n=a[0].length%3,i=a[0].substr(0,n),o=a[0].substr(n).match(/\d{3}/gi);return o&&(separator=n?".":"",i+=separator+o.join(".")),i=null!=a[1]?i+","+a[1]:i,null==r?i:i?"Rp"+i:""}function padTo2Digits(t){return t.toString().padStart(2,"0")}function formatDate(t){return[padTo2Digits(t.getDate()),padTo2Digits(t.getMonth()+1),t.getFullYear()].join("-")}