#include <stdio.h>
#include <stdlib.h>
struct node
{
    int data;
    struct node *next;
};
struct node *head = NULL;
void insertbeg()
{
    struct node *newnode;
    newnode = (struct node *)malloc(sizeof(struct node));
    printf("enter data  ");
    scanf("%d", &newnode->data);
    newnode->next = head;
    head = newnode;
}
void insertend()
{
    struct node *newnode, *temp;
    newnode = (struct node *)malloc(sizeof(struct node));
    printf("enter data ");
    scanf("%d", &newnode->data);
    newnode->next = NULL;
    if (head == NULL)
    {
        head = newnode;
    }
    else
    {
        temp = head;
        while (temp->next != NULL)
        {
            temp = temp->next;
        }
        temp->next = newnode;
    }
}
void insertpos()
{
    int pos,i;
    struct node *newnode, *temp;
    newnode = (struct node *)malloc(sizeof(struct node));
    printf("enter position ");
    scanf("%d", &pos);
    temp = head;
    while (temp != NULL)
    {
        temp = temp->next;
    }
        temp = head;
        printf("enter data ");
        scanf("%d", &newnode->data);
        if (pos == 0)
        {
            newnode->next = head;
            head = newnode;
        }
        else
        {
            for (i = 0; i < pos - 1; i++)
            {
                temp = temp->next;
            }
            newnode->next = temp->next;
            temp->next = newnode;
        }
}

void display()
{
struct node *temp;
temp = head;
        printf("elements : ");
        while (temp != NULL)
        {
            printf("%d ", temp->data);
            temp = temp->next;
        }
        printf("\n");
    }


void deletebeg()
{
        struct node *temp = head;
        head = head->next;
        free(temp);
}

void deleteend()
{
if (head->next == NULL)
    {
        free(head);
        head = NULL;
    }
    else
    {
        struct node *temp = head;
        while (temp->next->next != NULL)
        {
            temp = temp->next;
        }
        free(temp->next);
        temp->next = NULL;
    }
}

void deletepos()
{
    int pos;
    printf("enter pos ");
    scanf("%d", &pos);
    struct node *temp = head;
    if (pos == 0)
    {
    head = temp->next;
    free(temp);
    }
    else
    {
        for (int i=0;temp!=NULL&&i<pos-1;i++)
            {
            temp = temp->next;
            }
            struct node *next_node = temp->next->next;
            free(temp->next);
            temp->next = next_node;
    }
}

int main()
{
    int n;
    do
    {
        printf("SLL \n 1. insert beg\n 2. insert end\n 3. insert pos\n 4. delete beg\n 5. delete end\n 6. delete pos\n 7. display\n \n enter choice : ");
        scanf("%d", &n);
        switch (n)
        {
        case 1:
            insertbeg();
            break;
        case 2:
            insertend();
            break;
        case 3:
            insertpos();
            break;
        case 4:
            deletebeg();
            break;
        case 5:
            deleteend();
            break;
        case 6:
            deletepos();
            break;
        case 7:
            display();
            break;
        default:
            printf("invalid choice\n");
        }
    } while (1);
    return 0;
}
#include <stdio.h>
#include <stdlib.h>
struct node {
    int data;
    struct node *prev;
    struct node *next;
};
struct node *head = NULL;
struct node *tail = NULL;
void insertbeg()
{
    struct node *newnode = (struct node *)malloc(sizeof(struct node));
    printf("enter data: ");
    scanf("%d", &newnode->data);
    newnode->prev = NULL;
    newnode->next = head;
    if (head!=NULL)
    {
        head->prev = newnode;
    }
    head = newnode;
    if (tail == NULL)
    {
        tail = newnode;
    }
}
void insertend()
{
    struct node *newnode = (struct node *)malloc(sizeof(struct node));
    printf("enter data: ");
    scanf("%d", &newnode->data);
    newnode->prev = tail;
    newnode->next = NULL;
    if (tail != NULL)
    {
        tail->next = newnode;
    }
    tail = newnode;
    if (head == NULL)
    {
        head = newnode;
    }
}
void insertpos()
{
    int pos,i;
    printf("enter position ");
    scanf("%d", &pos);
    if (pos==1)
    {
        insertbeg();
    }
    else
    {
        struct node *newnode = (struct node *)malloc(sizeof(struct node));
        struct node *temp = head;
        printf("enter data ");
        scanf("%d", &newnode->data);
        for (i=1;i<pos-1 && temp!=NULL;i++)
        {
            temp = temp->next;
        }
        newnode->prev = temp;
        newnode->next = temp->next;
        if (temp->next!=NULL)
        {
            temp->next->prev = newnode;
        }
            temp->next = newnode;
    }
}
void deletebeg()
{
    struct node *temp = head;
    head = head->next;
    if (head!=NULL)
    {
        head->prev = NULL;
    }
    else
    {
        tail = NULL;
    }
    free(temp);
}

void deleteend()
{
    struct node *temp = tail;
    tail = tail->prev;
    if (tail!=NULL)
        {
        tail->next = NULL;
        }
    else
        {
        head = NULL;
        }
        free(temp);
}

void deletepos()
{
    int pos, i;
    printf("enter position ");
    scanf("%d", &pos);
    struct node *temp = head;
    for (i=1;i<pos&&temp!=NULL;i++)
        {
        temp=temp->next;
        }
    if (temp->prev != NULL)
    {
        temp->prev->next=temp->next;
    }
    else
    {
        head = temp->next;
    }
    if (temp->next != NULL)
    {
        temp->next->prev = temp->prev;
    }
    else
    {
        tail = temp->prev;
    }
    free(temp);
}

void display()
{
    struct node *temp = head;
    printf("elements \n");
    while (temp!=NULL)
    {
        printf("%d ", temp->data);
        temp=temp->next;
    }
    printf("\n");
}

void main()
{
    int n;
    do {
        printf("DLL\n 1. insert beg\n 2. insert end\n 3. insert pos\n 4. delete beg\n 5. delete end\n 6. delete pos\n 7. display\n enter choice ");
        scanf("%d",&n);
        switch (n)
        {
            case 1:
                insertbeg();
                break;
            case 2:
                insertend();
                break;
            case 3:
                insertpos();
                break;
            case 4:
                deletebeg();
                break;
            case 5:
                deleteend();
                break;
            case 6:
                deletepos();
                break;
            case 7:
                display();
                break;
            default:
                printf("invalid choice\n");
        }
    }
    while (n!=0);
}
#include <stdio.h>
#include <stdlib.h>

struct node {
    int data;
    struct node *next;
};
struct node *tail = NULL;
void insertAtBeg() {
    struct node *newnode = (struct node *)malloc(sizeof(struct node));
    printf("enter data ");
    scanf("%d", &newnode->data);
    newnode->next = NULL;
    if (tail == NULL)
    {
        tail = newnode;
        tail->next = newnode;
    }
    else {
        newnode->next = tail->next;
        tail->next = newnode;
    }
}

void insertAtEnd()
{
    struct node *newnode = (struct node *)malloc(sizeof(struct node));
    printf("enter data ");
    scanf("%d", &newnode->data);
    newnode->next = NULL;
    if (tail == NULL)
    {
        tail = newnode;
        tail->next = newnode;
    }
    else
    {
        newnode->next = tail->next;
        tail->next=newnode;
        tail = newnode;
    }
}

void insertAtPos()
{
    struct node *newnode, *temp;
    int pos, i;
    int l = 0;
    printf("Enter pos: ");
    scanf("%d", &pos);
    if (pos == 0)
    {
        insertAtBeg();
    }
    else
    {
        temp = tail->next;
        while (temp != tail->next) {
            l++;
            temp = temp->next;
        }
        if (pos==1)
        {
            insertAtBeg();
        } else
        {
            newnode = (struct node *)malloc(sizeof(struct node));
            printf("enter data ");
            scanf("%d", &newnode->data);
            newnode->next = NULL;
            temp=tail->next;
            for(i=0;i<pos-2;i++)
            {
                temp=temp->next;
            }
            newnode->next=temp->next;
            temp->next=newnode;
        }
    }
}
void deleteAtBeg()
{
  if (tail->next == tail)
    {
        free(tail);
        tail = NULL;
    }
  else {
        struct node *temp = tail->next;
        tail->next = temp->next;
        free(temp);
    }
}

void deleteAtEnd()
{
 if (tail->next == tail)
    {
        free(tail);
        tail = NULL;
    }
 else
    {
        struct node *temp = tail->next;
        struct node *previous = NULL;
        while (temp->next!=tail->next)
        {
            previous=temp;
            temp=temp->next;
        }
        previous->next = tail->next;
        tail = previous;
        free(temp);
    }
}

void deleteAtPos()
{
    struct node *temp, *nextnode;
    int pos, i;
    int l = 0;
    printf("Enter pos: ");
    scanf("%d", &pos);
  if (pos == 0)
    {
        deleteAtBeg();
    }
  else {
        temp=tail->next;
        while (temp != tail->next)
        {
            l++;
            temp=temp->next;
        }
        if (pos==1)
        {
            deleteAtBeg();
        }
        else
        {
            temp = tail->next;
            for (i = 0; i < pos - 2; i++)
            {
                temp = temp->next;
            }
            nextnode=temp->next;
            temp->next=nextnode->next;
            free(nextnode);
        }
    }
}
void display() {
    if (tail == NULL) {
        printf("List is empty.\n");
        return;
    }

    struct node *temp = tail->next;
    do {
        printf("%d ", temp->data);
        temp = temp->next;
    } while (temp != tail->next);

}

void main() {
    int n;

    do {
        printf("\nCLL\n 1. insert beg\n 2. insert end\n 3. insert pos\n 4. delete beg\n 5. delete end\n 6. delete pos\n 7. display\n enter choice ");
        scanf("%d", &n);

        switch (n) {
            case 1:
                insertAtBeg();
                break;
            case 2:
                insertAtEnd();
                break;
            case 3:
                insertAtPos();
                break;
            case 4:
                deleteAtBeg();
                break;
            case 5:
                deleteAtEnd();
                break;
            case 6:
                deleteAtPos();
                break;
            case 7:
                display();
                break;
            case 8:
                printf("Exiting program.\n");
                break;
            default:
                printf("Invalid choice. Please enter a valid option.\n");
        }
    } while (1);

}
#include <stdio.h>
int i,j,V[6]={0},B[6]={0},top=-1,front=-1,rear=-1,S[6],M[6];
int G[3][3]={0,1,1,1,0,0,1,0,0};
void main()
{
do
    {
    int x;
    printf("\n1.DFS 2.BFS :");
    scanf("%d",&x);

        switch(x)
        {
        case 1:
            depth();
            top=-1;
            break;
        case 2:
            breadth();
            front=rear=-1;
            break;
        default:
            printf("Choose from given!!");
        }
    }while(1);
}
int depth()
{
    printf("The DFS path is:");
    int s=0;
    top++;
    S[top]=s;
    V[0]=1;
    while(top!=-1)
    {
        s=S[top];
        printf("->%c",s+65);
        top--;
        for(i=0;i<3;i++)
        {
            if(G[s][i]==1 && V[i]==0)
            {
                top++;
                S[top]=i;
                V[i]=1;
            }
        }
    }
}
int breadth()
{
    int s=0;
    printf("The BFS path is:");
    rear++;
    M[rear]=s;
    front++;
    B[0]=1;
    while(rear>=front)
    {
        s=M[front];
        front++;
        printf("%c->",s+65);
        for(i=0;i<3;i++)
        {
            if(G[s][i]==1 && B[i]==0)
            {
                rear++;
                M[rear]=i;
                B[i]=1;
            }
        }
    }
}
         
#include <stdio.h>
int u,v,n=5,i,j,ne=1;
int V[5];
int min,mincost=0;
int cost[5][5]={0,1,0,2,0,1,0,3,1,0,0,3,0,4,3,2,1,4,0,2,0,0,3,2,0};
void main()
{
    for(i=0;i<5;i++)
    {
        for(j=0;j<5;j++)
        {
            if(cost[i][j]==0)
            {
                cost[i][j]=999;
            }
            V[i]=0;
        }
    }
    V[0]=1;
    printf("\nMinimum spanning tree edges : \n");
    while(ne<n)
    {
        min=999;
        for(i=0;i<n;i++)
        {
            for(j=0;j<n;j++)
            {
                if(cost[i][j]<min && V[i]!=0)
                {
                    min=cost[i][j];
                    u=i;
                    v=j;
                }
            }
        }
        if(V[v]==0)
        {
            printf("\nEdge %d :(%c %c), Cost :%d\n", ne++,u+65,v+65,min);
            mincost=mincost+min;
            V[v]=1;
        }
        cost[u][v]=cost[v][u]=999;
    }
    printf("\nMinimum Cost : %d\n",mincost);
}
     
#include <stdio.h>
int n=5;
int parent[5];
int find(int i);
int uni(int i, int j);
void main()
{
    int i, j, ne = 1;
    int min, mincost = 0;
    int cost[5][5] = {0, 1, 0, 2, 0, 1, 0, 3, 1, 0, 0, 3, 0, 4, 3, 2, 1, 4, 0, 2, 0, 0, 3, 2, 0};
    for (i = 0; i < 5; i++)
    {
        for (j = 0; j < 5; j++)
        {
            if(cost[i][j]==0)
            {
                cost[i][j]=999;
            }
        }
    }
    printf("\nMinimum spanning tree edges : \n");

    for (i = 0; i < 5; i++)
    {
        parent[i] = i;
    }

    while (ne < n)
    {
        int min=999,a=-1,b=-1;
        for (i=0;i<n;i++)
        {
            for (j=0;j<n;j++)
            {
                if (find(i) != find(j) && cost[i][j] < min)
                {
                    min = cost[i][j];
                    a = i;
                    b = j;
                }
            }
        }
        if(b != -1)
        {
            printf("\nEdge %d :(%c %c), Cost :%d\n", ne++, a + 65, b + 65, min);
            mincost = mincost + min;
        }
        uni(a,b);
        cost[a][b] = cost[b][a] = 999;
    }
    printf("\nMinimum Cost : %d\n", mincost);
}
int find(int i)
{
    while(parent[i]!=i)
    {
        i=parent[i];
    }
    return i;
}
int uni(int i, int j)
{
    parent[i]=j;
}
#include<stdio.h>
#include<conio.h>
void main()
{
    int a[20],n;
    printf("enter the no of elements");
    scanf("%d",&n);
    printf("enter the elements ");
    for(int i=0;i<n;i++)
    {
    scanf("%d",&a[i]);
    }
    printf("array is : ");
    for(int i=0;i<n;i++)
    {
    printf("%d \t ",a[i]);
    }
int in()
{
int pos,num;
printf("\n enter the position and number to insert ");
scanf("%d \t %d",&pos,&num);
for(int i=n-1;i>=pos-1;i--)
{
a[i+1]=a[i];
}
a[pos-1]=num;
printf("\n array is : ");
for(int i=0;i<=n;i++)
{
printf("%d \n ",a[i]);
}
}
int del()
{
int dpos;
printf("enter the position of number to delete ");
scanf("%d",&dpos);
         printf("\n array is : ");
        for(int i=0;i<=n;i++)
        {
           a[dpos-1]=a[i];
        }
         for(int i=0;i<n;i++)
        {
        printf("%d \n ",a[i]);
        }
}
int sort()
{
printf("sorted array is : \n");
 for(int i=0;i<n;i++)
        {
            for(int j=0;j<n-i-1;j++)
            {
        if (a[j] > a[j + 1]) {
            int v =a[j];
            a[j]=a[j+1];
            a[j+1]=v;
}
            }
        }
for(int i=0;i<n;i++)
        {
            printf("%d \t",a[i]);
        }

}
do
    {
    int x;
    printf("\n1.in 2.del 3.sort :");
    scanf("%d",&x);

        switch(x)
        {
        case 1:
            in();
            break;
        case 2:
            del();
            break;
        case 3:
            sort();
        break;
        default:
            printf("Choose from given!!");
        }
    }while(1);
}
