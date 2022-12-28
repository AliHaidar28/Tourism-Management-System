using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinFormsApp13
{
    public partial class Form1 : Form
    {
        Form3 ob;
        Form9 ob1;
        Form2 ob4;
        public Form1()
        {
            InitializeComponent();
        }

        private void button6_Click(object sender, EventArgs e)
        {
            Form f = new Form1();
            this.Close();
            f.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Hide();
            ob = new Form3();
            ob.Show();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            MessageBox.Show("You are in Home page");
        }

        private void button3_Click(object sender, EventArgs e)
        {
            this.Hide();
            ob1 = new Form9();
            ob1.Show();

        }

        private void button5_Click(object sender, EventArgs e)
        {
            this.Hide();
            ob4 = new Form2();
            ob4.Show();
        }

        private void button4_Click(object sender, EventArgs e)
        {

            string username = textBox1.Text;
            string password = textBox2.Text;


            if ((username == "admin") && (password == "pass"))
            {
                this.Hide();
                Form6 A = new Form6();
                A.Show();
            }

            else if ((username == "") && (password == ""))
            {
                MessageBox.Show("Fill up the form", "Error");
            }

            SqlConnection con = new SqlConnection("Data Source=LAPTOP-LG6P4QHF;Initial Catalog=Project;Persist Security Info=True;User ID=sa;Password=pokemoncom@123");
            SqlCommand cmd = new SqlCommand("select * from Manager where Username=@Username and Address=@Address", con);
            cmd.Parameters.AddWithValue("@Username", textBox1.Text);
            cmd.Parameters.AddWithValue("@Address", textBox2.Text);
            SqlDataAdapter sda = new SqlDataAdapter(cmd);
            DataTable dt = new DataTable();
            sda.Fill(dt);
            //Connection open here   
            con.Open();
            int i = cmd.ExecuteNonQuery();
            con.Close();
            if (dt.Rows.Count > 0)
            {
                MessageBox.Show("Successfully loged in");
                //after successful it will redirect  to next page .  
                Form4 Manager = new Form4();
                Manager.Show();
            }

            SqlConnection con1 = new SqlConnection("Data Source=LAPTOP-LG6P4QHF;Initial Catalog=Project;Persist Security Info=True;User ID=sa;Password=pokemoncom@123");
            SqlCommand cmd1 = new SqlCommand("select * from Staff where Username=@Username and Address=@Address", con1);
            cmd1.Parameters.AddWithValue("@Username", textBox1.Text);
            cmd1.Parameters.AddWithValue("@Address", textBox2.Text);
            SqlDataAdapter sda1 = new SqlDataAdapter(cmd1);
            DataTable dt1 = new DataTable();
            sda1.Fill(dt1);
            //Connection open here   
            con1.Open();
            int i1 = cmd1.ExecuteNonQuery();
            con1.Close();
            if (dt1.Rows.Count > 0)
            {
                MessageBox.Show("Successfully loged in");
                //after successful it will redirect  to next page .  
                Form5 Staff = new Form5();
                Staff.Show();
            }
         
        }
    }
}
