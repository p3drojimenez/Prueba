

    function isPositive(num)
    {
        if(num < 0)
        {
            return false
        }else
        {
            return true
        }
    }

    

    function SpecialSumFun(k, n){

        if(isPositive(k) && isPositive(n))
        {
            if(k == 0)
            {
                return n
            }
            let acum = 0
            for(let i = 1; i <= n ; i++)
            {
                acum = acum + SpecialSumFun(k - 1 ,i)
            }
            return acum
        }
        
    }
console.log(SpecialSumFun(1,3))
console.log(SpecialSumFun(2,3))
console.log(SpecialSumFun(4,10))
console.log(SpecialSumFun(10,10))
