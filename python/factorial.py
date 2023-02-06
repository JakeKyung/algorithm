def factorial(n):
    f = 1
    for i in range(1, n+1):
        f = f * i
        print(f)
    return f

print(factorial(5))
'''
f = 1 * 1 = 1
f = 1 * 2 = 2
f = 2 * 3 = 6
f = 6 * 4 = 24
f = 24 * 5 = 120
output : 120
'''
