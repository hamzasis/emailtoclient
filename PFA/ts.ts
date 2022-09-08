ngOnInit(){
    this.getDate();
}

minDate: any = "2021-05-03";
getdate(){
    var date: any = new date();
    var toDate: any = date.getDate();
    if (toDate < 10) {
        toDate = '0' + toDate;
    }
    var month: any = date.getMonth() + 1;
    if (month < 10) {
        month = '0' + month;
    }
    var year = date.getFullYear();
    this.minDate = year + "-" + month + "-" toDate;
    console.log(this.minDate)
}


