function getPrice(){
    axios.get(pageRoutes.getPrice).then(function (response) {
        console.log(response);
        let data = response.data;
        let currency = [];
        let price = [];
        let i = 0;
        for (let key in data) {
            currency[i] = key;
            price[i] = Object.values(data[key]);
            i++;
        }
        i = 0;
        $('table thead tr th').each(function () {
            this.innerText = currency[i];
            i++;
        });
        i = 0;
        $('table tbody tr td').each(function () {
            this.innerText = 'usd : ' + price[i];
            i++;
        });

    });
}

getPrice();
setInterval(getPrice, 15000);
