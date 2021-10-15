import bin_graphs
cond=True
graph=[0]
while cond:
    command, n=input().split(' ')
    n=int(n)
    if command=='add':
        graph=bin_graphs.add(graph,n)
    elif command=='del':
        n=bin_graphs.find_top(graph,n)
        graph[n]=0
        graph=bin_graphs.delete(graph,n)
        while True:
           if isinstance(graph, tuple):
               graph=graph[-1]
           else:
               break
    elif command=='preorder':
        print(bin_graphs.preorder(graph))
    elif command=='inorder':
        print(bin_graphs.inorder(graph))
    elif command=='postorder':
        print(bin_graphs.postorder(graph))
    elif command=='print':
        print(graph)
    elif command=='exit':
        break
