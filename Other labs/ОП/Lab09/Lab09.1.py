import Sorts
BubbleSort = Sorts.BubbleSort
MergeSort = Sorts.MergeSort
QuickSort = Sorts.QuickSort

from random import randint
from random import shuffle

l = 20
'''
for srt in range(2):
    A = [2+i*i for i in range(N)]
    if srt == 0:
        BubbleSort(A)
        print(A)
    if srt == 1:
        MergeSort(A)
        print(A)
    if srt == 2:
        QuickSort(A)
        print(A)
    A.clear()
'''


B = [randint(1, 100) for i in range(l)]
print("NoneSort: " + str(B))
for srt in range(3):
    A = B.copy()
    if srt == 0:
        BubbleSort(A)
        print("BubbleSort: " + str(A))
    if srt == 1:
        # MergeSort(A)
        print("MergeSort: " + str(A))
    if srt == 2:
        QuickSort(A, 0, len(A) - 1)
        print("QuickSort: " + str(A))
    A.clear()



A = [2 + i * i for i in range(l)]
A.reverse()
print('\n' + "NoneSort: " + str(A))
for srt in range(3):
    A = [2 + i * i for i in range(N)]
    A.reverse()
    if srt == 0:
        BubbleSort(A)
        print("BubbleSort: " + str(A))
    if srt == 1:
        # MergeSort(A)
        print("MergeSort: " + str(A))
    if srt == 2:
        QuickSort(A, 0, len(A) - 1)
        print("QuickSort: " + str(A))
    A.clear()