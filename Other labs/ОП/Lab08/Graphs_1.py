def get_graph():
    graph=open('input.txt','r')
    graph_output=[0]
    for line in graph:
        graph_output.append(list(map(int,line.split(' '))))
    return graph_output
def adjacency(graph,v,w):
    for i in range(len(graph[w])):
        for j in range(len(graph[w])):
            if graph[v][j]==1 and graph[w][i]==1:
                return 'Вершина '+str(v)+' смежна вершине '+str(w)
            elif graph[v][i]==-1 and graph[w][j]==1:
                return 'Вершина '+str(v)+' смежна вершине '+str(w)
            elif graph[v][i]==1 and graph[w][j]==-1:
               return 'Вершина '+str(w)+' смежна вершине '+str(v)
        return 'Вершины не смежны'
def all_adjacency(graph,v):
    storage=[]
    for i in range(len(graph[v])):
        if graph[v][i]==1:
            for j in range(1,v):
                if graph[j][i]==1 or graph[j][i]==-1:
                    storage.append(j)
            for j in range((v+1),len(graph)):
                if graph[j][i]==1 or graph[j][i]==-1:
                    storage.append(j)
    return storage
def top_weight(graph,v):
    storage=0
    for i in range(len(graph[v])):
        if graph[v][i]==1:
            for j in range(1,v):
                if graph[j][i]==1:
                    storage+=1
            for j in range(v+1,len(graph)):
                if graph[j][i] == 1:
                    storage += 1
        elif graph[v][i]==-1:
            for j in range(1,v):
                if graph[j][i]==1:
                    storage+=1
            for j in range(v+1,len(graph)):
                if graph[j][i] == 1:
                    storage += 1
    return storage
def edge_weight(graph,v,w):
    return (top_weight(graph,v)+top_weight(graph,w))/2
def all_edges(graph):
    storage=0
    for j in range(1, len(graph)):
        for i in range(len(graph[1])):
            if graph[j][i] == 1:
                for k in range(j+1,len(graph)):
                    if graph[k][i]==1:
                        print('(',j,', ',k,')',sep='',end=' ')
                        graph[k][i]=0
                    elif graph[k][i]==-1:
                        print('(',k,', ',j,')',sep='',end=' ')
                        graph[k][i] = 0
            elif graph[j][i] == -1:
                for k in range(j + 1, len(graph)):
                    if graph[k][i] == 1:
                        print('(', j, ', ', k, ')', sep='', end=' ')
                        graph[k][i] = 0