#include<iostream>
#include<fstream>
using namespace std;
int main()
{
	ifstream infile;
	ofstream outfile;
	outfile.open("hima");
	char ch;
	infile.open("king");
	cout<<"contents in the file are\n";
	while(!infile.eof())
	{
		infile.get(ch);
		outfile<<ch;
	}
	return 0;
}
