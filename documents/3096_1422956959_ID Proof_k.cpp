#include<iostream>
using namespace std;
int main()
{
	 int a[3][3],p,q,i,j,n;
	 cout<<"Player 1------>0\n Player 2------>1";
	 
	 for(i=0;i<3;i++)
	 {
	 	for(j=0;j<3;j++)
	 	{
	 		a[i][j]=5;
	 	}
	 }
	 i=0;
	 j=0;
	 for(n=0;n<9;n++)
	 {
	 	cout<<"\nplayer1, where?   ";
	 	cin>>i>>j;
	 	a[i][j]=0;
	 	p=i;
	 	for(q=0;q<3;q++)
	 	{
	 	 if(a[i][j]!=0)
	 	   break;
	 	}
	 	if(q==3)
	 	{
	 		cout<<"\nPlayer 1 wins\n";
	 		return 0;
	 	}
	 	q=j;
	 	for(p=0;p<3;p++)
	 	{
	 	 if(a[p][q]!=0)
	 	   break;
	 	}
	 	if(p==3)
	 	{
	 		cout<<"\nPlayer 1 wins\n";
	 		return 0;
	 	}
	 	if((i==0&& j!=1)||(j==0 &&  i!=1)||(i==1&&j==1))
	 	{
	 		for(p=0;p<3;p++)
	 		{
	 		  if(a[p][p]!=0)
	 		   break;
	 		}
	 		if(p==3)
	 		 {
	 		 	cout<<"Player 1 wins\n";
	 		 	return 0;
	 		 }
	 		 if(a[0][2]==0 && a[1][1]==0 && a[2][0]==0)
	 		 {
	 		 	cout<<"Player 1 wins\n";
	 		 	return 0;	 		 }
	 	}
	 	
	 	
	 		cout<<"\nplayer2, where?   ";
	 	cin>>i>>j;
	 	a[i][j]=1;
	 	p=i;
	 	for(q=0;q<3;q++)
	 	{
	 	 if(a[i][j]!=1)
	 	   break;
	 	}
	 	if(q==3)
	 	{
	 		cout<<"\nPlayer 2 wins\n";
	 		return 0;
	 	}
	 	q=j;
	 	for(p=0;p<3;p++)
	 	{
	 	 if(a[p][q]!=1)
	 	   break;
	 	}
	 	if(p==3)
	 	{
	 		cout<<"\nPlayer 2 wins\n";
	 		return 0;
	 	}
	 	if((i==0&& j!=1)||(j==0 &&  i!=1)||(i==1&&j==1))
	 	{
	 		for(p=0;p<3;p++)
	 		{
	 		  if(a[p][p]!=1)
	 		   break;
	 		}
	 		if(p==3)
	 		 {
	 		 	cout<<"Player 2 wins\n";
	 		 	return 0;
	 		 }
	 		 if(a[0][2]==0 && a[1][1]==0 && a[2][0]==0)
	 		 {
	 		 	cout<<"Player 2 wins\n";
	 		 	return 0;
	 		 }
	 	}
	 	
	 }
	 if(n==9)
	 cout<<"\n\n\nDraw\n";
	 return 0;	 
}