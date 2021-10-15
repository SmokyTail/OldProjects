def add(graph,i):
    if len(graph)==1:
        graph.append(i)
        for i in range(2):
            graph.append(0)
    else:
        cnt=1
        cond=True
        while cond==True:
            if graph[cnt]>i:
                if graph[2*cnt]==0:
                    graph[2*cnt]=i
                    for i in range(2*2*(cnt+1)-len(graph)):
                        graph.append(0)
                    cond=False
                else:
                    cnt=2*cnt
            else:
                if graph[2*cnt+1]==0:
                    graph[2*cnt+1]=i
                    for i in range(2*2*(cnt+1)-len(graph)):
                        graph.append(0)
                    cond=False
                else:
                    cnt=2*cnt+1
    return graph
def find_top(graph,n):
    cond=True
    cnt=1
    while cond:
         if n>graph[cnt]:
             cnt=2*cnt+1
         elif n<graph[cnt]:
             cnt=2*cnt
         else:
            return cnt
def delete(graph,n):
    if 2*n<len(graph)-1:
        if graph[2*n]!=0 and graph[2*n+1]!=0:
            graph=add(graph, graph.pop(2*n))
            graph=add(graph,graph.pop(2*n+1))
            return delete(graph,2*n), delete(graph,2*n+1), delete(graph,(2*n+1)), delete(graph,(2*n+1)+1)
        elif graph[2*n]!=0:
            graph=add(graph, graph.pop(2*n))
            return delete(graph, 2 * n), delete(graph, 2 * n + 1)
        elif graph[2*n+1]!=0:
            graph=add(graph,graph.pop(2*n+1))
            return delete(graph,(2*n+1)), delete(graph,(2*n+1)+1)
        else:
            return graph
    else:
       return graph
def inorder(graph,n=1):
    if 2*n< len(graph) - 1:
        if graph[2*n]!=0 and graph[2*n+1]!=0:
            return inorder(graph,2*n)+' '+str(graph[n])+' '+inorder(graph,2*n+1)
        elif graph[2*n]!=0:
            return  inorder(graph,2*n)+' '+str(graph[n])+' '
        elif graph[2*n+1]!=0:
            return str(graph[n]) +' '+ inorder(graph,2*n+1)+' '
        else:
            return str(graph[n])
    else:
        return str(graph[n])
def preorder(graph,n=1):
    if 2 * n < len(graph) - 1:
        if graph[2 * n] != 0 and graph[2 * n + 1] != 0:
            return str(graph[n])+' '+preorder(graph,2*n)+' '+preorder(graph,2*n+1)
        elif graph[2 * n] != 0:
            return str(graph[n])+' '+preorder(graph,2*n)
        elif  graph[2*n+1]!=0:
            return str(graph[n]) + ' ' + preorder(graph,2*n+1)
        else:
            return str(graph[n])
    else:
        return str(graph[n])
def postorder(graph,n=1):
    if 2 * n < len(graph) - 1:
        if graph[2 * n] != 0 and graph[2 * n + 1] != 0:
            return postorder(graph, 2 * n) + ' ' + postorder(graph, 2 * n + 1)+' '+str(graph[n]) + ' '
        elif graph[2 * n] != 0:
            return postorder(graph, 2 * n)+' '+str(graph[n])
        elif graph[2 * n + 1] != 0:
            return  postorder(graph, 2 * n + 1)+' '+str(graph[n])
        else:
            return str(graph[n])
    else:
        return str(graph[n])

