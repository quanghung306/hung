let productList = [
    {
        name: "iphone 7",
        quantity: 30
    },
    {
        name: "Samsung S10",
        quantity: 10
    },
    {
        name: "Iphone X",
        quantity: 5
    },
    {
        name: "Xiaomi Redmi",
        quantity: 1
    },
];
    var arr=[]
    for(let Sanpham of productList){
     if(Sanpham.quantity<10){
        console.log("  hang sap het han") ;
        arr.push(Sanpham.name);
        console.log(arr);
    }
   
}
