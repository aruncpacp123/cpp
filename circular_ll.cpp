//28. Write a C++ program to implementation of Circular linked list. Menu driven program.
#include<iostream>
using namespace std;
class node
{
    int data;
    node *next;
   public:
    void insert_front(node **head,int new_data)
    {
        node* new_node = new node();
        new_node->data = new_data;
        if(*head==NULL)
        {
            new_node->next=new_node;
            *head=new_node;
            return;
        }
        new_node->next=*head;
        node *last=(*head)->next;
        while(last->next!=*head)
            last=last->next;
        *head=new_node;
        last->next=*head;
    }
    void insert_after(node **head,node *prev,int new_data)
    {
        node* new_node = new node();
        new_node->data = new_data;
        if(*head==NULL)
        {
            *head=new_node;
            new_node->next=new_node;
            return;
        }
            new_node->next=prev->next;
            prev->next=new_node;
    }
    void insert_last(node **head,int new_data)
    {
        node *last=*head;
        node* new_node = new node();
        new_node->data = new_data;
        if(*head==NULL)
        {
            *head=new_node;
            new_node->next=new_node;
            return;
        }
        else if(last->next==NULL)
        {
            (*head)->next=new_node;
            new_node->next=*head;
            return;
        }
        while(last->next!=*head)
            last=last->next;
        last->next=new_node;
        new_node->next=*head;
    }
    node *search(node *head,int a)
    {
        if(head->data==a)
           return head;
        node *last=head->next;
        while(last!=head)
        {
            if(last->data==a)
                return last;
            last=last->next;
        }
        return NULL;
    }
    void traverse(node *);
    void delete_front(node **);
    void delete_end(node **);
    void delete_at(node **);
};
void node::delete_front(node **head)
{
    if(*head==NULL)
    {
        cout<<"\n Linked List is Empty ";
        return;
    }
    if((*head)->next==*head)
    {
        *head=NULL;
        return;
    }
    node *last=*head;
    while(last->next!=*head)
        last=last->next;
    *head=(*head)->next;
    last->next=*head;
}
void node :: delete_end(node **head)
{
    if(*head==NULL)
    {
        cout<<"\n Linked List is Empty";
        return;
    }
    if((*head)->next==*head)
    {
        *head=NULL;
        return;
    }
    if(((*head)->next)->next==*head)
    {
        delete (*head)->next;
        (*head)->next=*head;
        return;
    }
    node *last=(*head)->next;
    node *prev;
    while(last->next!=*head)
    {
        prev=last;
        last=last->next;
    }
    prev->next=*head;
    delete last;
}
void node::delete_at(node **head)
{
    int data;
    node *cur=NULL;
    node *prev=*head;
    if(*head==NULL)
    {
        cout<<"\n Empty Linked List";
        return;
    }
    cout<<"\n Enter the node to delete :";
    cin>>data;
    cur=search(*head,data);
    if(cur!=NULL)
    {
        if(prev==cur)
        {
            if(cur->next==*head)
            {
                *head=NULL;
                return;
            }
            node *last=*head;
            while(last->next!=*head)
                last=last->next;
            *head=(*head)->next;
            last->next=*head;
            return;
        }
        while(prev->next!=cur)
           prev=prev->next;
        prev->next=cur->next;
        delete cur;
    }
    else
    {
        cout<<"\n No such Node";
        return;
    }
    
}
void node::traverse(node* head)
{
    if(head==NULL)
    {
        cout<<"\n Empty Linked List";
        return;
    }
    node *last=head;
    while(last->next!=head)
    {
        cout<<last->data<<" ";
        last=last->next;
    }
    cout<<last->data;
}
int main()
{
    node *head=NULL,*after,*elem=NULL;
    node N;
    int n,i,e,ch,a,op;
    cout<<"\n Enter number of nodes in the linked list :";
    cin>>n;
    if(n!=0)
    {
        cout<<"\n Enter "<<n<<" elements to the linked list :";
        cin>>e;
        N.insert_front(&head,e);
    }
    for(i=1;i<n;i++)
    {
        cin>>e;
        N.insert_last(&head,e);
    }
    if(n!=0){cout<<"\n Created Linked List :";
    N.traverse(head);}
    dis:            
    cout<<"\n 1. Insertion";
    cout<<"\n 2. Deletion";
    cout<<"\n 3. Traverse";
    cout<<"\n 4. Search";
    cout<<"\n 5. Exit";
    cout<<"\n Enter your choice :";
    cin>>ch;
    switch(ch)
    {
        case 1:
                cout<<"\n 1. Insert at Front";
                cout<<"\n 2. Insert at last";
                cout<<"\n 3. Insert after an element";
                cout<<"\n 4. Go Back";
                cout<<"\n Enter your choice :";
                cin>>op;
                switch(op)
                {
                    case 1:
                            cout<<"\n Enter the element to insert :";
                            cin>>e;
                            N.insert_front(&head,e);
                            cout<<"\n New Linked list :";
                            N.traverse(head);
                            break;
                    case 2:
                            cout<<"\n Enter the element to insert :";
                            cin>>e;
                            N.insert_last(&head,e);
                            cout<<"\n New Linked list :";
                            N.traverse(head);
                            break;
                    case 3:
                            cout<<"\n Enter the element to insert :";
                            cin>>e;
                            cout<<"\n Enter after which element you want to insert :";
                            cin>>a;
                            if(head==NULL)
                            {
                                cout<<"\n No Element in the list";
                                break;
                            }
                            after=N.search(head,a);
                            if(after!=NULL)
                              N.insert_after(&head,after,e);
                            else
                            {
                              cout<<"\n No such element ";
                              break;
                            }
                            cout<<"\n New Linked list is: ";
                            N.traverse(head);
                            break;
                    case 4:
                            goto dis;
                            break;
                    default:
                            cout<<"\n Invalid Choice";            
                }
                break;           
        case 2:
                cout<<"\n 1.Delete from Beginning ";
                cout<<"\n 2.Delte from End ";
                cout<<"\n 3.Delete from a position ";
                cout<<"\n 4.Go Back ";
                cout<<"\n Enter your option :";
                cin>>op;
                switch(op)
                {
                    case 1:
                            N.delete_front(&head);
                            cout<<"\n New Linked list is: ";
                            N.traverse(head);
                            break;
                    case 2:
                            N.delete_end(&head);
                            cout<<"\n New Linked list is: ";
                            N.traverse(head);
                            break;
                    case 3:
                            N.delete_at(&head);
                            cout<<"\n New Linked list is: ";
                            N.traverse(head);
                            break;
                    case 4:
                            goto dis;
                            break;
                    default:
                            cout<<"\n Invalid choice entry ";
                }
                break;
        case 3:
                cout<<"\n Elements in the Linked List :";
                N.traverse(head);
                break;
        case 4:
                cout<<"\n Enter the node to search :";
                cin>>e;
                
                elem=N.search(head,e);
                if(elem==NULL)
                    cout<<"\n"<<e<<" not present in the linked List ";
                else
                    cout<<"\n"<<e<<" is present in the linked List ";
                break;
        case 5:
                cout<<"\n Program Exited";
                exit(0);
        default:
                cout<<"\n Invalid Choice";
    }
    goto dis;
    return 0;
}        