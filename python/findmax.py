
def find_max(a):
    n = len(a)
    max_v = a[0]
    for i in range(1, n):
        if a[i] > max_v:
            max_v = a[i]
    return max_v        



v = [7,45,87,16,5,42,65,26]
print(find_max(v))

