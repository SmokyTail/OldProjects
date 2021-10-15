def BubbleSort(A):
    N = len(A)
    for i in range(0, N-1):
        for j in range (0, N-1):
            if A[j] > A[j+1]:
                A[j], A[j+1] = A[j+1], A[j]



def Merge(A, L1, R1, L2, R2):
    i = L1, j = L2, k = L1
    while (i <= R1) and (j <= R2):
        if A[i] <= A[j]:
            B[k] = A[i]
            i += 1
        else:
            B[k] = A[j]
            j += 1
        k += 1
    if i <= R1:
        while (i <= R1) and (j <= R2):
            B[k] = A[i]
            i += 1
            k += 1
    if j <= R2:
        while j <= R2:
            B[k] = A[j]
            j += 1
            k += 1
        for i in range(L1, R2+1):
            A[i] = B[i]

def MergeSort(A,L,R):
    if L < R:
        m = int((L+R) / 2)
        MergeSort(A, L, m)
        MergeSort(A, m+1, R)
        Merge(A, L, m, m+1, R)



def QuickSort(A, L, R):
    i = L
    j = R
    Bar = A[L]
    while i > j:
        while A[i] < Bar:
            i += 1
        while Bar < A[j]:
            j -= 1
        if i <= j:
            if A[i] > A[j]:
                A[i], A[j] = A[j], A[i]
            i += 1
            j -= 1
        if L < j:
            QuickSort(A, L, j)
        if i < R:
            QuickSort(A, i, R)