cows(years)
{
    let num = 1
    for (i = 0; i<=num; i++) {
        if (i >= 4 &&i <15 ) {
            num++
            cows(years - i)
        }
        if (i >= 20) {
            num--
        }
    }
}
