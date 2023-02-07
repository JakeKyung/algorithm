# 최소 거스름돈의 개수

def func(n):
    n=int(n)
    count=0
    coin_type = [50000,10000,5000,1000,500,100,50,10]
    for coin in coin_type:
        count += n // coin
        n %= coin
    return(count)

#54520
n=input()
print(func(n))
#output : 8

