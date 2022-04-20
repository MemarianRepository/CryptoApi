function getPrice(){
    axios.get(pageRoutes.getPrice).then(function (response) {
        console.log(response.data);
    });
}

getPrice();
setInterval(getPrice, 15000);
