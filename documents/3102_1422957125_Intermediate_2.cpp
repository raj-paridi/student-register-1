#include<iostream>
#include<fstream>
using namespace std;
int main()
{
	char a[20];
	int i=0;
	ofstream ofstr;
	ofstr.open("example.txt");
	cout<<"opened successfully";
	cout<<"Enter the string to write in a file";
	for(i=0;i<20;i++)
	cin>>a[i];
	i=0;
	do {
     ofstr<<a[i];
	 i++;
	 
	}
	while (ofstr&&!ofstr.eof()&&i<20);
	ofstr.close();
	cout<<"closed successfully";
	return 0;
	}
