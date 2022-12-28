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
    public partial class Form5 : Form
    {
        public Form5()
        {
            InitializeComponent();
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
        void BindData()
        {
            SqlConnection con = new SqlConnection("Data Source=LAPTOP-LG6P4QHF;Initial Catalog=Project;Persist Security Info=True;User ID=sa;Password=pokemoncom@123");
            con.Open();
            SqlCommand cmd = new SqlCommand("SELECT * FROM Staff", con);
            SqlDataAdapter da = new SqlDataAdapter(cmd);
            DataTable dt = new DataTable();
            da.Fill(dt);
            dataGridView1.DataSource = dt;

        }

        private void button3_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=LAPTOP-LG6P4QHF;Initial Catalog=Project;Persist Security Info=True;User ID=sa;Password=pokemoncom@123");
            con.Open();
            SqlCommand cmd = new SqlCommand("INSERT INTO Staff(ID, Name, Username, Mobile_Num, Address) VALUES(@ID, @Name, @Username, @Mobile_Num, @Address)", con);
            cmd.Parameters.AddWithValue("@ID", int.Parse(textBox5.Text));
            cmd.Parameters.AddWithValue("@Name", textBox1.Text);
            cmd.Parameters.AddWithValue("@Username", textBox2.Text);
            cmd.Parameters.AddWithValue("@Mobile_Num", int.Parse(textBox3.Text));
            cmd.Parameters.AddWithValue("@Address", textBox4.Text);
            cmd.ExecuteNonQuery();
            con.Close();
            textBox1.Text = "";
            textBox2.Text = "";
            textBox3.Text = "";
            textBox4.Text = "";
            textBox5.Text = "";
            BindData();
            MessageBox.Show("Successfully Inserted");
        }

        private void button4_Click(object sender, EventArgs e)
        {
            BindData();
            SqlConnection con = new SqlConnection("Data Source=LAPTOP-LG6P4QHF;Initial Catalog=Project;Persist Security Info=True;User ID=sa;Password=pokemoncom@123");
            con.Open();
            SqlCommand cmd = new SqlCommand("Update Staff SET Name=@Name, Username=@Username, Mobile_Num=@Mobile_Num, Address=@Address WHERE ID=@ID", con);
            cmd.Parameters.AddWithValue("@ID", int.Parse(textBox5.Text));
            cmd.Parameters.AddWithValue("@Name", textBox1.Text);
            cmd.Parameters.AddWithValue("@Username", textBox2.Text);
            cmd.Parameters.AddWithValue("@Mobile_Num", int.Parse(textBox3.Text));
            cmd.Parameters.AddWithValue("@Address", textBox4.Text);
            cmd.ExecuteNonQuery();
            con.Close();
            textBox1.Text = "";
            textBox2.Text = "";
            textBox3.Text = "";
            textBox4.Text = "";
            textBox5.Text = "";
            BindData();
            MessageBox.Show("Successfully Updated");
        }

        private void button5_Click(object sender, EventArgs e)
        {
            BindData();
            SqlConnection con = new SqlConnection("Data Source=LAPTOP-LG6P4QHF;Initial Catalog=Project;Persist Security Info=True;User ID=sa;Password=pokemoncom@123");
            con.Open();
            SqlCommand cmd = new SqlCommand("SELECT * FROM Staff WHERE ID=@ID", con);
            cmd.Parameters.AddWithValue("@ID", int.Parse(textBox5.Text));
            SqlDataAdapter da = new SqlDataAdapter(cmd);
            DataTable dt = new DataTable();
            da.Fill(dt);
            dataGridView1.DataSource = dt;
            textBox1.Text = "";
            textBox2.Text = "";
            textBox3.Text = "";
            textBox4.Text = "";
            textBox5.Text = "";
        }

        private void button6_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=LAPTOP-LG6P4QHF;Initial Catalog=Project;Persist Security Info=True;User ID=sa;Password=pokemoncom@123");
            con.Open();
            SqlCommand cmd = new SqlCommand("DELETE Staff WHERE ID=@ID", con);
            cmd.Parameters.AddWithValue("@ID", int.Parse(textBox5.Text));
            cmd.ExecuteNonQuery();
            con.Close();
            textBox1.Text = "";
            textBox2.Text = "";
            textBox3.Text = "";
            textBox4.Text = "";
            textBox5.Text = "";
            BindData();
            MessageBox.Show("Successfully Deleted");
        }
    }
}
