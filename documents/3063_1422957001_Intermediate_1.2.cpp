#include<iostream>
#include<fstream>
using namespace std;
int main() {
 ifstream ifs;
 ifs.open("hello.txt");
 char output[100];
 if (ifs.is_open())
{
 	while (!ifs.eof()) 
{
    ifs>> output;
    cout<<output;
}
}
ifs.close();
return 0;
}

