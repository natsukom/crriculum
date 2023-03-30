class Taiyaki {

    constructor(tast) {
        this.tast = tast; 
}

inside(){
    console.log('中身は${this.tast}です');
}

}
let あんこ = new Taiyaki('あんこ');
あんこ.inside();
