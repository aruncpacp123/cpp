//26. Write a C++ program to implement Singly linked List. Menu driven program.
#include<iostream>
using namespace std;
class Node
{
    int data;
    Node *next;
   public:
    void insert_front(Node **,int);
    void insert_after(Node *,int);
    void insert_last(Node **,int);
    void traverse(Node *);
    void delete_front(Node **);
    void delete_pos(Node **);
    void delete_end(Node **);
    Node *search(Node *,int);
};
void Node::insert_front(Node** head, int new_data)
{
    Node* new_node = new Node();
    new_node->data = new_data;
    new_node->next = *head;
    *head = new_node;
}
void Node::insert_after(Node* prev_node, int new_data)
{
    Node* new_node = new Node();
    new_node->data = new_data;
    new_node->next = prev_node->next;
    prev_node->next = new_node;
}
void Node::insert_last(Node** head_ref, int new_data)
{
    Node* new_node = new Node();
    Node *last = *head_ref;
    new_node->data = new_data;
    new_node->next = NULL;
    if (*head_ref == NULL)
    {
        *head_ref = new_node;
        return;
    }
    while (last->next != NULL)
    {
        last = last->next;
    }
    last->next = new_node;
    return;
}
void Node::traverse(Node *head)
{
    if(head==NULL)
       cout<<" Empty";
    while(head!=NULL)
    {
       cout<<head->data<<" ";
       head=head->next;
    }
}
void Node::delete_front(Node **head)
{
    Node *temp;
    if(*head==NULL)
    {
        cout<<"\n Linked List is Empty ";
        return;
    }
    temp=*head;
    *head=temp->next;
    delete temp;
    cout<<"\n New Linked List is :";
    traverse(*head);
}
void Node::delete_pos(Node **head)
{
    Node *pos=NULL;
    Node *prev;
    if(*head==NULL)
    {
        cout<<"\n Linked List is Empty";
        return;
    }
    int a;
    cout<<"\n Enter the node to delete :";
    cin>>a;
    pos=search(*head,a);
    if(pos!=NULL)
    {
        prev=*head;
        while(prev->next!=pos)
            prev=prev->next;
        prev->next=pos->next;
        delete pos;
    }
    else
    {
       cout<<"\n No such Node";
       return ;
    }
    cout<<"\n New Linked List is :";
    traverse(*head);
}
void Node::delete_end(Node **head)
{
    Node *last,*prev;
    if(*head==NULL)
    {
        cout<<"\n Linked List is Empty";
        return;
    }
    last=*head;
    if(last->next==NULL)
    {
        *head=NULL;
        delete last;
    }
    else
    {
        while(last->next!=NULL)
        {
            prev=last;
            last=last->next;
        }
        prev->next=NULL;
        delete last;
    }
    cout<<"\n New Linked List is :";
    traverse(*head);
}
Node* Node :: search(Node *head,int a)
{
    if(head->data==a)
      return head;
    /*if(head->next!=NULL)
        search(head->next,a);*/
    Node *last=head->next;
    while(last!=NULL)
    {
        if(last->data==a)
            return last;
        last=last->next;
    }
    return NULL;
}
int main()
{
    Node N;
    Node *head=NULL;
    Node *after=NULL,*elem;
    int n,i,e,ch,op,a;
    cout<<"\n Enter size of the linked list :";
    cin>>n;
    if(n!=0)
    {
        cout<<"\n Enter the elements to insert :";
        cin>>e;
        N.insert_front(&head,e);
        for(i=1;i<n;i++)
        {
            cin>>e;
            N.insert_last(&head,e);
        }
        cout<<"\n Linked List is :";
        N.traverse(head);
    }
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
                              N.insert_after(after,e);
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
                            break;
                    case 2:
                            N.delete_end(&head);
                            break;
                    case 3:
                            N.delete_pos(&head);
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