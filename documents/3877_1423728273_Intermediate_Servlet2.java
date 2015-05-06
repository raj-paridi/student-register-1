import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class Servlet2 extends HttpServlet
{
 public void init()
  {
    System.out.println("from init() of servlet2");
  }
 public void service(HttpServletRequest req,HttpServletResponse res)throws ServletException,IOException
  {
   System.out.println("from service() of servlet2 ");
   
 }
 public void destroy()
{
 System.out.println("from destroy() of servlet2");
}
}