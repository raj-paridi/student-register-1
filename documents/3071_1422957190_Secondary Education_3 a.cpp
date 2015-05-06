#include<iostream>
#include<string.h>
#include<fstream>
using namespace std;
int main()
{
	char names[10][100];
	int i,j,k,len,n;
	cout<<"enter the no.of names ";
	cin>>n;
	cout<<"enter the names";
	for(i=0;i<=n;i++)
	{
	gets(names[i]);
	}
	for(i=0;i<=n;i++)
	{
	len=strlen(names[i]);
	for(j=0,k=len-1;j<=n,k>=0;j++,k--)
	{
	cout<<names[i][k]<<endl;
	}
	}
	return 0;
}
