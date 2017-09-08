<!DOCTYPE html>
<html>
<!-- 你可以在首頁用7個布丁(Down)召喚夏樹 ♥ -->
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta property="og:image" content="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/14572162_1252145058141615_5372376516585391677_n.jpg?oh=0cbc551ed333341dfb4b741290efa494&oe=58B0328A"></meta>
    <title>Hiteku</title>
    <link rel="shortcut icon" href="icon.ico">
    <meta name="theme-color" content="#444">
    <meta name="apple-mobile-web-app-status-bar-style" content="#444">
    <meta name="msapplication-navbutton-color" content="#444">
</head>
<body>
<div id="background"></div>

<div id="content">
    <div id="record">
        <h4>Matlab影像處理</h4>
        <iframe width="520" height="330" src="https://www.youtube.com/embed/eEpFubiyqqM" frameborder="0" allowfullscreen></iframe>
        <h3 id="linked">　</h3><h3>　</h3>
        <h4>鏈結串列含堆疊</h4>
        <div id="videotext">
            專案：Linked List 鏈結串列<br>
            版本：ver 1.0.1<br>
            語言：C++ <a href="https://doc-0g-4c-docs.googleusercontent.com/docs/securesc/ha0ro937gcuc7l7deffksulhg5h7mbp1/rholadgbsq2vb149pm2p8i39v7k5np1u/1482660000000/07559736078994184253/*/0B5i9SrYcHxlBaGtycFF6NDExTTQ?e=download" style="text-decoration:none;">執行檔</a><br>
            使用軟體：Visual Studio 2015<br>
            網站：<a href="http://布丁.大平台.tw" style="text-decoration:none;">http://布丁.大平台.tw</a><br>
            備註：這是紀錄，並非教學呦～<br>
        </div>
        <br>
        <iframe width="540" height="410" src="https://www.youtube.com/embed/lFGi3He8Gj0" frameborder="0" allowfullscreen></iframe>
        <br><br><br>
        <textarea readonly="readonly">
#pragma once
#include <cstdlib>
#include <ctime>

struct Dnode
{
    struct Dnode *prev;
    int data;
    struct Dnode *next;
};
struct Dnode *first; //雙向用
struct Dnode *head; //單向用
struct Dnode *tail; //單向用
struct Dnode *top; //堆疊用
struct Dnode *reTop; //堆疊反轉用

namespace LinkedList {

    using namespace System;
    using namespace System::ComponentModel;
    using namespace System::Collections;
    using namespace System::Windows::Forms;
    using namespace System::Data;
    using namespace System::Drawing;

    /// <summary>
    /// MyForm 的摘要
    /// </summary>
    public ref class MyForm : public System::Windows::Forms::Form
    {
    public:
        MyForm(void)
        {
            InitializeComponent();
            //
            //TODO:  在此加入建構函式程式碼
            //
            first = new Dnode;
            first->prev = first;
            first->next = first;
            first->data = NULL;
            head = new Dnode;
            head->prev = head;
            head->next = head;
            tail = head;
            head->data = NULL;
            top = NULL;
        }

    protected:
        /// <summary>
        /// 清除任何使用中的資源。
        /// </summary>
        ~MyForm()
        {
            if (components)
            {
                delete components;
            }
        }
    private: System::Windows::Forms::TabPage^  tabPage3;
    protected:
    private: System::Windows::Forms::GroupBox^  groupBox9;
    private: System::Windows::Forms::Button^  button26;
    private: System::Windows::Forms::Button^  button27;
    private: System::Windows::Forms::Button^  button28;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown9;
    private: System::Windows::Forms::Label^  label7;
    private: System::Windows::Forms::RichTextBox^  richTextBox3;
    private: System::Windows::Forms::Button^  button30;
    private: System::Windows::Forms::GroupBox^  groupBox12;
    private: System::Windows::Forms::Button^  button36;
    private: System::Windows::Forms::Label^  label8;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown11;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown12;
    private: System::Windows::Forms::Label^  label9;
    private: System::Windows::Forms::TabPage^  tabPage1;
    private: System::Windows::Forms::GroupBox^  groupBox1;
    private: System::Windows::Forms::Button^  button5;
    private: System::Windows::Forms::Button^  button4;
    private: System::Windows::Forms::Button^  button3;
    private: System::Windows::Forms::Button^  button2;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown1;
    private: System::Windows::Forms::Label^  label3;
    private: System::Windows::Forms::RichTextBox^  richTextBox1;
    private: System::Windows::Forms::GroupBox^  groupBox4;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown2;
    private: System::Windows::Forms::Button^  button11;
    private: System::Windows::Forms::Button^  button1;
    private: System::Windows::Forms::GroupBox^  groupBox2;
    private: System::Windows::Forms::Button^  button12;
    private: System::Windows::Forms::Button^  button6;
    private: System::Windows::Forms::Button^  button7;
    private: System::Windows::Forms::Button^  button8;
    private: System::Windows::Forms::Button^  button9;
    private: System::Windows::Forms::GroupBox^  groupBox3;
    private: System::Windows::Forms::Button^  button10;
    private: System::Windows::Forms::Label^  label1;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown4;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown3;
    private: System::Windows::Forms::Label^  label2;
    private: System::Windows::Forms::TabControl^  tabControl1;
    private: System::Windows::Forms::TabPage^  tabPage2;
    private: System::Windows::Forms::GroupBox^  groupBox5;
    private: System::Windows::Forms::Button^  button13;
    private: System::Windows::Forms::Button^  button14;
    private: System::Windows::Forms::Button^  button15;
    private: System::Windows::Forms::Button^  button16;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown5;
    private: System::Windows::Forms::Label^  label4;
    private: System::Windows::Forms::RichTextBox^  richTextBox2;
    private: System::Windows::Forms::GroupBox^  groupBox6;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown6;
    private: System::Windows::Forms::Button^  button17;
    private: System::Windows::Forms::Button^  button18;
    private: System::Windows::Forms::GroupBox^  groupBox7;
    private: System::Windows::Forms::Button^  button19;
    private: System::Windows::Forms::Button^  button20;
    private: System::Windows::Forms::Button^  button21;
    private: System::Windows::Forms::Button^  button22;
    private: System::Windows::Forms::Button^  button23;
    private: System::Windows::Forms::GroupBox^  groupBox8;
    private: System::Windows::Forms::Button^  button24;
    private: System::Windows::Forms::Label^  label5;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown7;
    private: System::Windows::Forms::NumericUpDown^  numericUpDown8;
    private: System::Windows::Forms::Label^  label6;
    private: System::Windows::Forms::Label^  label10;
    private: System::Windows::Forms::Button^  button25;
    protected:

    private:
        /// <summary>
        /// 設計工具所需的變數。
        /// </summary>
        System::ComponentModel::Container ^components;

#pragma region Windows Form Designer generated code
        /// <summary>
        /// 此為設計工具支援所需的方法 - 請勿使用程式碼編輯器修改
        /// 這個方法的內容。
        /// </summary>
        void InitializeComponent(void)
        {
            this->tabPage3 = (gcnew System::Windows::Forms::TabPage());
            this->groupBox9 = (gcnew System::Windows::Forms::GroupBox());
            this->label10 = (gcnew System::Windows::Forms::Label());
            this->button26 = (gcnew System::Windows::Forms::Button());
            this->button27 = (gcnew System::Windows::Forms::Button());
            this->button30 = (gcnew System::Windows::Forms::Button());
            this->button28 = (gcnew System::Windows::Forms::Button());
            this->numericUpDown9 = (gcnew System::Windows::Forms::NumericUpDown());
            this->label7 = (gcnew System::Windows::Forms::Label());
            this->richTextBox3 = (gcnew System::Windows::Forms::RichTextBox());
            this->groupBox12 = (gcnew System::Windows::Forms::GroupBox());
            this->button36 = (gcnew System::Windows::Forms::Button());
            this->label8 = (gcnew System::Windows::Forms::Label());
            this->numericUpDown11 = (gcnew System::Windows::Forms::NumericUpDown());
            this->numericUpDown12 = (gcnew System::Windows::Forms::NumericUpDown());
            this->label9 = (gcnew System::Windows::Forms::Label());
            this->tabPage1 = (gcnew System::Windows::Forms::TabPage());
            this->groupBox1 = (gcnew System::Windows::Forms::GroupBox());
            this->button5 = (gcnew System::Windows::Forms::Button());
            this->button4 = (gcnew System::Windows::Forms::Button());
            this->button3 = (gcnew System::Windows::Forms::Button());
            this->button2 = (gcnew System::Windows::Forms::Button());
            this->numericUpDown1 = (gcnew System::Windows::Forms::NumericUpDown());
            this->label3 = (gcnew System::Windows::Forms::Label());
            this->richTextBox1 = (gcnew System::Windows::Forms::RichTextBox());
            this->groupBox4 = (gcnew System::Windows::Forms::GroupBox());
            this->numericUpDown2 = (gcnew System::Windows::Forms::NumericUpDown());
            this->button11 = (gcnew System::Windows::Forms::Button());
            this->button1 = (gcnew System::Windows::Forms::Button());
            this->groupBox2 = (gcnew System::Windows::Forms::GroupBox());
            this->button12 = (gcnew System::Windows::Forms::Button());
            this->button6 = (gcnew System::Windows::Forms::Button());
            this->button7 = (gcnew System::Windows::Forms::Button());
            this->button8 = (gcnew System::Windows::Forms::Button());
            this->button9 = (gcnew System::Windows::Forms::Button());
            this->groupBox3 = (gcnew System::Windows::Forms::GroupBox());
            this->button10 = (gcnew System::Windows::Forms::Button());
            this->label1 = (gcnew System::Windows::Forms::Label());
            this->numericUpDown4 = (gcnew System::Windows::Forms::NumericUpDown());
            this->numericUpDown3 = (gcnew System::Windows::Forms::NumericUpDown());
            this->label2 = (gcnew System::Windows::Forms::Label());
            this->tabControl1 = (gcnew System::Windows::Forms::TabControl());
            this->tabPage2 = (gcnew System::Windows::Forms::TabPage());
            this->groupBox5 = (gcnew System::Windows::Forms::GroupBox());
            this->button13 = (gcnew System::Windows::Forms::Button());
            this->button14 = (gcnew System::Windows::Forms::Button());
            this->button15 = (gcnew System::Windows::Forms::Button());
            this->button16 = (gcnew System::Windows::Forms::Button());
            this->numericUpDown5 = (gcnew System::Windows::Forms::NumericUpDown());
            this->label4 = (gcnew System::Windows::Forms::Label());
            this->richTextBox2 = (gcnew System::Windows::Forms::RichTextBox());
            this->groupBox6 = (gcnew System::Windows::Forms::GroupBox());
            this->numericUpDown6 = (gcnew System::Windows::Forms::NumericUpDown());
            this->button17 = (gcnew System::Windows::Forms::Button());
            this->button18 = (gcnew System::Windows::Forms::Button());
            this->groupBox7 = (gcnew System::Windows::Forms::GroupBox());
            this->button19 = (gcnew System::Windows::Forms::Button());
            this->button20 = (gcnew System::Windows::Forms::Button());
            this->button21 = (gcnew System::Windows::Forms::Button());
            this->button22 = (gcnew System::Windows::Forms::Button());
            this->button23 = (gcnew System::Windows::Forms::Button());
            this->groupBox8 = (gcnew System::Windows::Forms::GroupBox());
            this->button24 = (gcnew System::Windows::Forms::Button());
            this->label5 = (gcnew System::Windows::Forms::Label());
            this->numericUpDown7 = (gcnew System::Windows::Forms::NumericUpDown());
            this->numericUpDown8 = (gcnew System::Windows::Forms::NumericUpDown());
            this->label6 = (gcnew System::Windows::Forms::Label());
            this->button25 = (gcnew System::Windows::Forms::Button());
            this->tabPage3->SuspendLayout();
            this->groupBox9->SuspendLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown9))->BeginInit();
            this->groupBox12->SuspendLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown11))->BeginInit();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown12))->BeginInit();
            this->tabPage1->SuspendLayout();
            this->groupBox1->SuspendLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown1))->BeginInit();
            this->groupBox4->SuspendLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown2))->BeginInit();
            this->groupBox2->SuspendLayout();
            this->groupBox3->SuspendLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown4))->BeginInit();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown3))->BeginInit();
            this->tabControl1->SuspendLayout();
            this->tabPage2->SuspendLayout();
            this->groupBox5->SuspendLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown5))->BeginInit();
            this->groupBox6->SuspendLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown6))->BeginInit();
            this->groupBox7->SuspendLayout();
            this->groupBox8->SuspendLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown7))->BeginInit();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown8))->BeginInit();
            this->SuspendLayout();
            // 
            // tabPage3
            // 
            this->tabPage3->Controls->Add(this->groupBox9);
            this->tabPage3->Controls->Add(this->richTextBox3);
            this->tabPage3->Controls->Add(this->groupBox12);
            this->tabPage3->Location = System::Drawing::Point(4, 26);
            this->tabPage3->Name = L"tabPage3";
            this->tabPage3->Size = System::Drawing::Size(595, 389);
            this->tabPage3->TabIndex = 2;
            this->tabPage3->Text = L"Linked Stack";
            this->tabPage3->UseVisualStyleBackColor = true;
            // 
            // groupBox9
            // 
            this->groupBox9->Controls->Add(this->button25);
            this->groupBox9->Controls->Add(this->label10);
            this->groupBox9->Controls->Add(this->button26);
            this->groupBox9->Controls->Add(this->button27);
            this->groupBox9->Controls->Add(this->button30);
            this->groupBox9->Controls->Add(this->button28);
            this->groupBox9->Controls->Add(this->numericUpDown9);
            this->groupBox9->Controls->Add(this->label7);
            this->groupBox9->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox9->Location = System::Drawing::Point(5, 6);
            this->groupBox9->Name = L"groupBox9";
            this->groupBox9->Size = System::Drawing::Size(445, 126);
            this->groupBox9->TabIndex = 12;
            this->groupBox9->TabStop = false;
            this->groupBox9->Text = L"Stack";
            // 
            // label10
            // 
            this->label10->AutoSize = true;
            this->label10->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 15.75F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label10->ForeColor = System::Drawing::Color::FromArgb(static_cast<System::Int32>(static_cast<System::Byte>(255)), static_cast<System::Int32>(static_cast<System::Byte>(128)),
                static_cast<System::Int32>(static_cast<System::Byte>(128)));
            this->label10->Location = System::Drawing::Point(119, 77);
            this->label10->Name = L"label10";
            this->label10->Size = System::Drawing::Size(75, 26);
            this->label10->TabIndex = 11;
            this->label10->Text = L"Result";
            // 
            // button26
            // 
            this->button26->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button26->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button26->Location = System::Drawing::Point(270, 28);
            this->button26->Name = L"button26";
            this->button26->Size = System::Drawing::Size(95, 34);
            this->button26->TabIndex = 2;
            this->button26->Text = L"Clear";
            this->button26->UseVisualStyleBackColor = true;
            this->button26->Click += gcnew System::EventHandler(this, &MyForm::button26_Click);
            // 
            // button27
            // 
            this->button27->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button27->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button27->Location = System::Drawing::Point(17, 73);
            this->button27->Name = L"button27";
            this->button27->Size = System::Drawing::Size(95, 34);
            this->button27->TabIndex = 2;
            this->button27->Text = L"Pop";
            this->button27->UseVisualStyleBackColor = true;
            this->button27->Click += gcnew System::EventHandler(this, &MyForm::button27_Click);
            // 
            // button30
            // 
            this->button30->BackColor = System::Drawing::Color::FromArgb(static_cast<System::Int32>(static_cast<System::Byte>(255)), static_cast<System::Int32>(static_cast<System::Byte>(245)),
                static_cast<System::Int32>(static_cast<System::Byte>(255)));
            this->button30->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button30->Font = (gcnew System::Drawing::Font(L"Square721 BT", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(0)));
            this->button30->Location = System::Drawing::Point(382, 28);
            this->button30->Name = L"button30";
            this->button30->Size = System::Drawing::Size(45, 79);
            this->button30->TabIndex = 0;
            this->button30->Text = L"Hi";
            this->button30->UseVisualStyleBackColor = false;
            this->button30->Click += gcnew System::EventHandler(this, &MyForm::button30_Click);
            // 
            // button28
            // 
            this->button28->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button28->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button28->Location = System::Drawing::Point(17, 30);
            this->button28->Name = L"button28";
            this->button28->Size = System::Drawing::Size(95, 34);
            this->button28->TabIndex = 1;
            this->button28->Text = L"Push";
            this->button28->UseVisualStyleBackColor = true;
            this->button28->Click += gcnew System::EventHandler(this, &MyForm::button28_Click);
            // 
            // numericUpDown9
            // 
            this->numericUpDown9->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown9->Location = System::Drawing::Point(188, 34);
            this->numericUpDown9->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown9->Name = L"numericUpDown9";
            this->numericUpDown9->Size = System::Drawing::Size(50, 25);
            this->numericUpDown9->TabIndex = 10;
            this->numericUpDown9->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 73, 0, 0, 0 });
            // 
            // label7
            // 
            this->label7->AutoSize = true;
            this->label7->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 11.25F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label7->Location = System::Drawing::Point(120, 37);
            this->label7->Name = L"label7";
            this->label7->Size = System::Drawing::Size(67, 19);
            this->label7->TabIndex = 9;
            this->label7->Text = L"Number";
            // 
            // richTextBox3
            // 
            this->richTextBox3->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 11.25F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->richTextBox3->Location = System::Drawing::Point(5, 138);
            this->richTextBox3->Name = L"richTextBox3";
            this->richTextBox3->ReadOnly = true;
            this->richTextBox3->Size = System::Drawing::Size(583, 246);
            this->richTextBox3->TabIndex = 16;
            this->richTextBox3->Text = L"";
            // 
            // groupBox12
            // 
            this->groupBox12->Controls->Add(this->button36);
            this->groupBox12->Controls->Add(this->label8);
            this->groupBox12->Controls->Add(this->numericUpDown11);
            this->groupBox12->Controls->Add(this->numericUpDown12);
            this->groupBox12->Controls->Add(this->label9);
            this->groupBox12->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox12->Location = System::Drawing::Point(456, 6);
            this->groupBox12->Name = L"groupBox12";
            this->groupBox12->Size = System::Drawing::Size(132, 126);
            this->groupBox12->TabIndex = 14;
            this->groupBox12->TabStop = false;
            this->groupBox12->Text = L"Random";
            // 
            // button36
            // 
            this->button36->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button36->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button36->Location = System::Drawing::Point(17, 91);
            this->button36->Name = L"button36";
            this->button36->Size = System::Drawing::Size(97, 24);
            this->button36->TabIndex = 4;
            this->button36->Text = L"Push";
            this->button36->UseVisualStyleBackColor = true;
            this->button36->Click += gcnew System::EventHandler(this, &MyForm::button36_Click);
            // 
            // label8
            // 
            this->label8->AutoSize = true;
            this->label8->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label8->Location = System::Drawing::Point(28, 30);
            this->label8->Name = L"label8";
            this->label8->Size = System::Drawing::Size(29, 17);
            this->label8->TabIndex = 6;
            this->label8->Text = L"n =";
            // 
            // numericUpDown11
            // 
            this->numericUpDown11->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown11->Location = System::Drawing::Point(70, 57);
            this->numericUpDown11->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown11->Minimum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 1, 0, 0, 0 });
            this->numericUpDown11->Name = L"numericUpDown11";
            this->numericUpDown11->Size = System::Drawing::Size(44, 25);
            this->numericUpDown11->TabIndex = 7;
            this->numericUpDown11->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 99, 0, 0, 0 });
            // 
            // numericUpDown12
            // 
            this->numericUpDown12->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown12->Location = System::Drawing::Point(70, 27);
            this->numericUpDown12->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown12->Minimum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 1, 0, 0, 0 });
            this->numericUpDown12->Name = L"numericUpDown12";
            this->numericUpDown12->Size = System::Drawing::Size(44, 25);
            this->numericUpDown12->TabIndex = 6;
            this->numericUpDown12->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 10, 0, 0, 0 });
            // 
            // label9
            // 
            this->label9->AutoSize = true;
            this->label9->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label9->Location = System::Drawing::Point(14, 60);
            this->label9->Name = L"label9";
            this->label9->Size = System::Drawing::Size(56, 17);
            this->label9->TabIndex = 8;
            this->label9->Text = L"range =";
            // 
            // tabPage1
            // 
            this->tabPage1->BackColor = System::Drawing::Color::White;
            this->tabPage1->Controls->Add(this->groupBox1);
            this->tabPage1->Controls->Add(this->richTextBox1);
            this->tabPage1->Controls->Add(this->groupBox4);
            this->tabPage1->Controls->Add(this->groupBox2);
            this->tabPage1->Controls->Add(this->groupBox3);
            this->tabPage1->Location = System::Drawing::Point(4, 26);
            this->tabPage1->Name = L"tabPage1";
            this->tabPage1->Padding = System::Windows::Forms::Padding(3);
            this->tabPage1->Size = System::Drawing::Size(595, 389);
            this->tabPage1->TabIndex = 0;
            this->tabPage1->Text = L"Doubly Linked List";
            // 
            // groupBox1
            // 
            this->groupBox1->Controls->Add(this->button5);
            this->groupBox1->Controls->Add(this->button4);
            this->groupBox1->Controls->Add(this->button3);
            this->groupBox1->Controls->Add(this->button2);
            this->groupBox1->Controls->Add(this->numericUpDown1);
            this->groupBox1->Controls->Add(this->label3);
            this->groupBox1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox1->Location = System::Drawing::Point(5, 6);
            this->groupBox1->Name = L"groupBox1";
            this->groupBox1->Size = System::Drawing::Size(169, 126);
            this->groupBox1->TabIndex = 2;
            this->groupBox1->TabStop = false;
            this->groupBox1->Text = L"Insert";
            // 
            // button5
            // 
            this->button5->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button5->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button5->Location = System::Drawing::Point(89, 60);
            this->button5->Name = L"button5";
            this->button5->Size = System::Drawing::Size(63, 24);
            this->button5->TabIndex = 3;
            this->button5->Text = L"After";
            this->button5->UseVisualStyleBackColor = true;
            this->button5->Click += gcnew System::EventHandler(this, &MyForm::button5_Click);
            // 
            // button4
            // 
            this->button4->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button4->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button4->Location = System::Drawing::Point(89, 30);
            this->button4->Name = L"button4";
            this->button4->Size = System::Drawing::Size(63, 24);
            this->button4->TabIndex = 2;
            this->button4->Text = L"Before";
            this->button4->UseVisualStyleBackColor = true;
            this->button4->Click += gcnew System::EventHandler(this, &MyForm::button4_Click);
            // 
            // button3
            // 
            this->button3->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button3->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button3->Location = System::Drawing::Point(17, 60);
            this->button3->Name = L"button3";
            this->button3->Size = System::Drawing::Size(63, 24);
            this->button3->TabIndex = 2;
            this->button3->Text = L"Last";
            this->button3->UseVisualStyleBackColor = true;
            this->button3->Click += gcnew System::EventHandler(this, &MyForm::button3_Click);
            // 
            // button2
            // 
            this->button2->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button2->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button2->Location = System::Drawing::Point(17, 30);
            this->button2->Name = L"button2";
            this->button2->Size = System::Drawing::Size(63, 24);
            this->button2->TabIndex = 1;
            this->button2->Text = L"First";
            this->button2->UseVisualStyleBackColor = true;
            this->button2->Click += gcnew System::EventHandler(this, &MyForm::button2_Click);
            // 
            // numericUpDown1
            // 
            this->numericUpDown1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown1->Location = System::Drawing::Point(96, 91);
            this->numericUpDown1->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown1->Name = L"numericUpDown1";
            this->numericUpDown1->Size = System::Drawing::Size(50, 25);
            this->numericUpDown1->TabIndex = 10;
            this->numericUpDown1->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 73, 0, 0, 0 });
            // 
            // label3
            // 
            this->label3->AutoSize = true;
            this->label3->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 11.25F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label3->Location = System::Drawing::Point(15, 94);
            this->label3->Name = L"label3";
            this->label3->Size = System::Drawing::Size(67, 19);
            this->label3->TabIndex = 9;
            this->label3->Text = L"Number";
            // 
            // richTextBox1
            // 
            this->richTextBox1->BorderStyle = System::Windows::Forms::BorderStyle::FixedSingle;
            this->richTextBox1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 11.25F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->richTextBox1->Location = System::Drawing::Point(5, 138);
            this->richTextBox1->Name = L"richTextBox1";
            this->richTextBox1->ReadOnly = true;
            this->richTextBox1->Size = System::Drawing::Size(583, 246);
            this->richTextBox1->TabIndex = 11;
            this->richTextBox1->Text = L"";
            // 
            // groupBox4
            // 
            this->groupBox4->Controls->Add(this->numericUpDown2);
            this->groupBox4->Controls->Add(this->button11);
            this->groupBox4->Controls->Add(this->button1);
            this->groupBox4->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox4->Location = System::Drawing::Point(180, 6);
            this->groupBox4->Name = L"groupBox4";
            this->groupBox4->Size = System::Drawing::Size(95, 126);
            this->groupBox4->TabIndex = 9;
            this->groupBox4->TabStop = false;
            this->groupBox4->Text = L"Search";
            // 
            // numericUpDown2
            // 
            this->numericUpDown2->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown2->Location = System::Drawing::Point(17, 29);
            this->numericUpDown2->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown2->Name = L"numericUpDown2";
            this->numericUpDown2->Size = System::Drawing::Size(63, 25);
            this->numericUpDown2->TabIndex = 3;
            this->numericUpDown2->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 27, 0, 0, 0 });
            // 
            // button11
            // 
            this->button11->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button11->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button11->Location = System::Drawing::Point(17, 60);
            this->button11->Name = L"button11";
            this->button11->Size = System::Drawing::Size(63, 24);
            this->button11->TabIndex = 9;
            this->button11->Text = L"Find it";
            this->button11->UseVisualStyleBackColor = true;
            this->button11->Click += gcnew System::EventHandler(this, &MyForm::button11_Click);
            // 
            // button1
            // 
            this->button1->BackColor = System::Drawing::Color::FromArgb(static_cast<System::Int32>(static_cast<System::Byte>(255)), static_cast<System::Int32>(static_cast<System::Byte>(245)),
                static_cast<System::Int32>(static_cast<System::Byte>(255)));
            this->button1->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button1->Font = (gcnew System::Drawing::Font(L"Square721 BT", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(0)));
            this->button1->Location = System::Drawing::Point(17, 90);
            this->button1->Name = L"button1";
            this->button1->Size = System::Drawing::Size(63, 25);
            this->button1->TabIndex = 0;
            this->button1->Text = L"Author";
            this->button1->UseVisualStyleBackColor = false;
            this->button1->Click += gcnew System::EventHandler(this, &MyForm::button1_Click);
            // 
            // groupBox2
            // 
            this->groupBox2->Controls->Add(this->button12);
            this->groupBox2->Controls->Add(this->button6);
            this->groupBox2->Controls->Add(this->button7);
            this->groupBox2->Controls->Add(this->button8);
            this->groupBox2->Controls->Add(this->button9);
            this->groupBox2->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox2->Location = System::Drawing::Point(281, 6);
            this->groupBox2->Name = L"groupBox2";
            this->groupBox2->Size = System::Drawing::Size(169, 126);
            this->groupBox2->TabIndex = 4;
            this->groupBox2->TabStop = false;
            this->groupBox2->Text = L"Delete";
            // 
            // button12
            // 
            this->button12->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button12->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button12->Location = System::Drawing::Point(17, 91);
            this->button12->Name = L"button12";
            this->button12->Size = System::Drawing::Size(135, 24);
            this->button12->TabIndex = 9;
            this->button12->Text = L"Reverse";
            this->button12->UseVisualStyleBackColor = true;
            this->button12->Click += gcnew System::EventHandler(this, &MyForm::button12_Click);
            // 
            // button6
            // 
            this->button6->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button6->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button6->Location = System::Drawing::Point(89, 60);
            this->button6->Name = L"button6";
            this->button6->Size = System::Drawing::Size(63, 24);
            this->button6->TabIndex = 3;
            this->button6->Text = L"ALL";
            this->button6->UseVisualStyleBackColor = true;
            this->button6->Click += gcnew System::EventHandler(this, &MyForm::button6_Click);
            // 
            // button7
            // 
            this->button7->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button7->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button7->Location = System::Drawing::Point(89, 30);
            this->button7->Name = L"button7";
            this->button7->Size = System::Drawing::Size(63, 24);
            this->button7->TabIndex = 2;
            this->button7->Text = L"Search";
            this->button7->UseVisualStyleBackColor = true;
            this->button7->Click += gcnew System::EventHandler(this, &MyForm::button7_Click);
            // 
            // button8
            // 
            this->button8->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button8->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button8->Location = System::Drawing::Point(17, 60);
            this->button8->Name = L"button8";
            this->button8->Size = System::Drawing::Size(63, 24);
            this->button8->TabIndex = 2;
            this->button8->Text = L"Last";
            this->button8->UseVisualStyleBackColor = true;
            this->button8->Click += gcnew System::EventHandler(this, &MyForm::button8_Click);
            // 
            // button9
            // 
            this->button9->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button9->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button9->Location = System::Drawing::Point(17, 30);
            this->button9->Name = L"button9";
            this->button9->Size = System::Drawing::Size(63, 24);
            this->button9->TabIndex = 1;
            this->button9->Text = L"First";
            this->button9->UseVisualStyleBackColor = true;
            this->button9->Click += gcnew System::EventHandler(this, &MyForm::button9_Click);
            // 
            // groupBox3
            // 
            this->groupBox3->Controls->Add(this->button10);
            this->groupBox3->Controls->Add(this->label1);
            this->groupBox3->Controls->Add(this->numericUpDown4);
            this->groupBox3->Controls->Add(this->numericUpDown3);
            this->groupBox3->Controls->Add(this->label2);
            this->groupBox3->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox3->Location = System::Drawing::Point(456, 6);
            this->groupBox3->Name = L"groupBox3";
            this->groupBox3->Size = System::Drawing::Size(132, 126);
            this->groupBox3->TabIndex = 5;
            this->groupBox3->TabStop = false;
            this->groupBox3->Text = L"Random";
            // 
            // button10
            // 
            this->button10->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button10->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button10->Location = System::Drawing::Point(17, 91);
            this->button10->Name = L"button10";
            this->button10->Size = System::Drawing::Size(97, 24);
            this->button10->TabIndex = 4;
            this->button10->Text = L"Generate";
            this->button10->UseVisualStyleBackColor = true;
            this->button10->Click += gcnew System::EventHandler(this, &MyForm::button10_Click);
            // 
            // label1
            // 
            this->label1->AutoSize = true;
            this->label1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label1->Location = System::Drawing::Point(28, 30);
            this->label1->Name = L"label1";
            this->label1->Size = System::Drawing::Size(29, 17);
            this->label1->TabIndex = 6;
            this->label1->Text = L"n =";
            // 
            // numericUpDown4
            // 
            this->numericUpDown4->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown4->Location = System::Drawing::Point(70, 57);
            this->numericUpDown4->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown4->Minimum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 1, 0, 0, 0 });
            this->numericUpDown4->Name = L"numericUpDown4";
            this->numericUpDown4->Size = System::Drawing::Size(44, 25);
            this->numericUpDown4->TabIndex = 7;
            this->numericUpDown4->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 99, 0, 0, 0 });
            // 
            // numericUpDown3
            // 
            this->numericUpDown3->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown3->Location = System::Drawing::Point(70, 27);
            this->numericUpDown3->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown3->Minimum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 1, 0, 0, 0 });
            this->numericUpDown3->Name = L"numericUpDown3";
            this->numericUpDown3->Size = System::Drawing::Size(44, 25);
            this->numericUpDown3->TabIndex = 6;
            this->numericUpDown3->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 10, 0, 0, 0 });
            // 
            // label2
            // 
            this->label2->AutoSize = true;
            this->label2->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label2->Location = System::Drawing::Point(14, 60);
            this->label2->Name = L"label2";
            this->label2->Size = System::Drawing::Size(56, 17);
            this->label2->TabIndex = 8;
            this->label2->Text = L"range =";
            // 
            // tabControl1
            // 
            this->tabControl1->Controls->Add(this->tabPage1);
            this->tabControl1->Controls->Add(this->tabPage2);
            this->tabControl1->Controls->Add(this->tabPage3);
            this->tabControl1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->tabControl1->ImeMode = System::Windows::Forms::ImeMode::NoControl;
            this->tabControl1->Location = System::Drawing::Point(10, 10);
            this->tabControl1->Multiline = true;
            this->tabControl1->Name = L"tabControl1";
            this->tabControl1->SelectedIndex = 0;
            this->tabControl1->Size = System::Drawing::Size(603, 419);
            this->tabControl1->TabIndex = 12;
            // 
            // tabPage2
            // 
            this->tabPage2->Controls->Add(this->groupBox5);
            this->tabPage2->Controls->Add(this->richTextBox2);
            this->tabPage2->Controls->Add(this->groupBox6);
            this->tabPage2->Controls->Add(this->groupBox7);
            this->tabPage2->Controls->Add(this->groupBox8);
            this->tabPage2->Location = System::Drawing::Point(4, 26);
            this->tabPage2->Name = L"tabPage2";
            this->tabPage2->Padding = System::Windows::Forms::Padding(3);
            this->tabPage2->Size = System::Drawing::Size(595, 389);
            this->tabPage2->TabIndex = 1;
            this->tabPage2->Text = L"Singly Linked List";
            this->tabPage2->UseVisualStyleBackColor = true;
            // 
            // groupBox5
            // 
            this->groupBox5->Controls->Add(this->button13);
            this->groupBox5->Controls->Add(this->button14);
            this->groupBox5->Controls->Add(this->button15);
            this->groupBox5->Controls->Add(this->button16);
            this->groupBox5->Controls->Add(this->numericUpDown5);
            this->groupBox5->Controls->Add(this->label4);
            this->groupBox5->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox5->Location = System::Drawing::Point(5, 6);
            this->groupBox5->Name = L"groupBox5";
            this->groupBox5->Size = System::Drawing::Size(169, 126);
            this->groupBox5->TabIndex = 12;
            this->groupBox5->TabStop = false;
            this->groupBox5->Text = L"Insert";
            // 
            // button13
            // 
            this->button13->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button13->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button13->Location = System::Drawing::Point(89, 60);
            this->button13->Name = L"button13";
            this->button13->Size = System::Drawing::Size(63, 24);
            this->button13->TabIndex = 3;
            this->button13->Text = L"After";
            this->button13->UseVisualStyleBackColor = true;
            this->button13->Click += gcnew System::EventHandler(this, &MyForm::button13_Click);
            // 
            // button14
            // 
            this->button14->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button14->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button14->Location = System::Drawing::Point(89, 30);
            this->button14->Name = L"button14";
            this->button14->Size = System::Drawing::Size(63, 24);
            this->button14->TabIndex = 2;
            this->button14->Text = L"Before";
            this->button14->UseVisualStyleBackColor = true;
            this->button14->Click += gcnew System::EventHandler(this, &MyForm::button14_Click);
            // 
            // button15
            // 
            this->button15->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button15->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button15->Location = System::Drawing::Point(17, 60);
            this->button15->Name = L"button15";
            this->button15->Size = System::Drawing::Size(63, 24);
            this->button15->TabIndex = 2;
            this->button15->Text = L"Tail";
            this->button15->UseVisualStyleBackColor = true;
            this->button15->Click += gcnew System::EventHandler(this, &MyForm::button15_Click);
            // 
            // button16
            // 
            this->button16->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button16->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button16->Location = System::Drawing::Point(17, 30);
            this->button16->Name = L"button16";
            this->button16->Size = System::Drawing::Size(63, 24);
            this->button16->TabIndex = 1;
            this->button16->Text = L"Head";
            this->button16->UseVisualStyleBackColor = true;
            this->button16->Click += gcnew System::EventHandler(this, &MyForm::button16_Click);
            // 
            // numericUpDown5
            // 
            this->numericUpDown5->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown5->Location = System::Drawing::Point(96, 91);
            this->numericUpDown5->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown5->Name = L"numericUpDown5";
            this->numericUpDown5->Size = System::Drawing::Size(50, 25);
            this->numericUpDown5->TabIndex = 10;
            this->numericUpDown5->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 52, 0, 0, 0 });
            // 
            // label4
            // 
            this->label4->AutoSize = true;
            this->label4->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 11.25F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label4->Location = System::Drawing::Point(15, 94);
            this->label4->Name = L"label4";
            this->label4->Size = System::Drawing::Size(67, 19);
            this->label4->TabIndex = 9;
            this->label4->Text = L"Number";
            // 
            // richTextBox2
            // 
            this->richTextBox2->BorderStyle = System::Windows::Forms::BorderStyle::FixedSingle;
            this->richTextBox2->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 11.25F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->richTextBox2->Location = System::Drawing::Point(5, 138);
            this->richTextBox2->Name = L"richTextBox2";
            this->richTextBox2->ReadOnly = true;
            this->richTextBox2->Size = System::Drawing::Size(583, 246);
            this->richTextBox2->TabIndex = 16;
            this->richTextBox2->Text = L"";
            // 
            // groupBox6
            // 
            this->groupBox6->Controls->Add(this->numericUpDown6);
            this->groupBox6->Controls->Add(this->button17);
            this->groupBox6->Controls->Add(this->button18);
            this->groupBox6->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox6->Location = System::Drawing::Point(180, 6);
            this->groupBox6->Name = L"groupBox6";
            this->groupBox6->Size = System::Drawing::Size(95, 126);
            this->groupBox6->TabIndex = 15;
            this->groupBox6->TabStop = false;
            this->groupBox6->Text = L"Search";
            // 
            // numericUpDown6
            // 
            this->numericUpDown6->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown6->Location = System::Drawing::Point(17, 29);
            this->numericUpDown6->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown6->Name = L"numericUpDown6";
            this->numericUpDown6->Size = System::Drawing::Size(63, 25);
            this->numericUpDown6->TabIndex = 3;
            this->numericUpDown6->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 145, 0, 0, 0 });
            // 
            // button17
            // 
            this->button17->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button17->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button17->Location = System::Drawing::Point(17, 60);
            this->button17->Name = L"button17";
            this->button17->Size = System::Drawing::Size(63, 24);
            this->button17->TabIndex = 9;
            this->button17->Text = L"Find it";
            this->button17->UseVisualStyleBackColor = true;
            this->button17->Click += gcnew System::EventHandler(this, &MyForm::button17_Click);
            // 
            // button18
            // 
            this->button18->BackColor = System::Drawing::Color::FromArgb(static_cast<System::Int32>(static_cast<System::Byte>(255)), static_cast<System::Int32>(static_cast<System::Byte>(245)),
                static_cast<System::Int32>(static_cast<System::Byte>(255)));
            this->button18->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button18->Font = (gcnew System::Drawing::Font(L"Square721 BT", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(0)));
            this->button18->Location = System::Drawing::Point(17, 90);
            this->button18->Name = L"button18";
            this->button18->Size = System::Drawing::Size(63, 25);
            this->button18->TabIndex = 0;
            this->button18->Text = L"Author";
            this->button18->UseVisualStyleBackColor = false;
            this->button18->Click += gcnew System::EventHandler(this, &MyForm::button18_Click);
            // 
            // groupBox7
            // 
            this->groupBox7->Controls->Add(this->button19);
            this->groupBox7->Controls->Add(this->button20);
            this->groupBox7->Controls->Add(this->button21);
            this->groupBox7->Controls->Add(this->button22);
            this->groupBox7->Controls->Add(this->button23);
            this->groupBox7->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox7->Location = System::Drawing::Point(281, 6);
            this->groupBox7->Name = L"groupBox7";
            this->groupBox7->Size = System::Drawing::Size(169, 126);
            this->groupBox7->TabIndex = 13;
            this->groupBox7->TabStop = false;
            this->groupBox7->Text = L"Delete";
            // 
            // button19
            // 
            this->button19->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button19->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button19->Location = System::Drawing::Point(17, 91);
            this->button19->Name = L"button19";
            this->button19->Size = System::Drawing::Size(135, 24);
            this->button19->TabIndex = 9;
            this->button19->Text = L"Reverse";
            this->button19->UseVisualStyleBackColor = true;
            this->button19->Click += gcnew System::EventHandler(this, &MyForm::button19_Click);
            // 
            // button20
            // 
            this->button20->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button20->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button20->Location = System::Drawing::Point(89, 60);
            this->button20->Name = L"button20";
            this->button20->Size = System::Drawing::Size(63, 24);
            this->button20->TabIndex = 3;
            this->button20->Text = L"ALL";
            this->button20->UseVisualStyleBackColor = true;
            this->button20->Click += gcnew System::EventHandler(this, &MyForm::button20_Click);
            // 
            // button21
            // 
            this->button21->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button21->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button21->Location = System::Drawing::Point(89, 30);
            this->button21->Name = L"button21";
            this->button21->Size = System::Drawing::Size(63, 24);
            this->button21->TabIndex = 2;
            this->button21->Text = L"Search";
            this->button21->UseVisualStyleBackColor = true;
            this->button21->Click += gcnew System::EventHandler(this, &MyForm::button21_Click);
            // 
            // button22
            // 
            this->button22->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button22->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button22->Location = System::Drawing::Point(17, 60);
            this->button22->Name = L"button22";
            this->button22->Size = System::Drawing::Size(63, 24);
            this->button22->TabIndex = 2;
            this->button22->Text = L"Tail";
            this->button22->UseVisualStyleBackColor = true;
            this->button22->Click += gcnew System::EventHandler(this, &MyForm::button22_Click);
            // 
            // button23
            // 
            this->button23->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button23->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button23->Location = System::Drawing::Point(17, 30);
            this->button23->Name = L"button23";
            this->button23->Size = System::Drawing::Size(63, 24);
            this->button23->TabIndex = 1;
            this->button23->Text = L"Head";
            this->button23->UseVisualStyleBackColor = true;
            this->button23->Click += gcnew System::EventHandler(this, &MyForm::button23_Click);
            // 
            // groupBox8
            // 
            this->groupBox8->Controls->Add(this->button24);
            this->groupBox8->Controls->Add(this->label5);
            this->groupBox8->Controls->Add(this->numericUpDown7);
            this->groupBox8->Controls->Add(this->numericUpDown8);
            this->groupBox8->Controls->Add(this->label6);
            this->groupBox8->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox8->Location = System::Drawing::Point(456, 6);
            this->groupBox8->Name = L"groupBox8";
            this->groupBox8->Size = System::Drawing::Size(132, 126);
            this->groupBox8->TabIndex = 14;
            this->groupBox8->TabStop = false;
            this->groupBox8->Text = L"Random";
            // 
            // button24
            // 
            this->button24->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button24->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button24->Location = System::Drawing::Point(17, 91);
            this->button24->Name = L"button24";
            this->button24->Size = System::Drawing::Size(97, 24);
            this->button24->TabIndex = 4;
            this->button24->Text = L"Generate";
            this->button24->UseVisualStyleBackColor = true;
            this->button24->Click += gcnew System::EventHandler(this, &MyForm::button24_Click);
            // 
            // label5
            // 
            this->label5->AutoSize = true;
            this->label5->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label5->Location = System::Drawing::Point(28, 30);
            this->label5->Name = L"label5";
            this->label5->Size = System::Drawing::Size(29, 17);
            this->label5->TabIndex = 6;
            this->label5->Text = L"n =";
            // 
            // numericUpDown7
            // 
            this->numericUpDown7->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown7->Location = System::Drawing::Point(70, 57);
            this->numericUpDown7->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown7->Minimum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 1, 0, 0, 0 });
            this->numericUpDown7->Name = L"numericUpDown7";
            this->numericUpDown7->Size = System::Drawing::Size(44, 25);
            this->numericUpDown7->TabIndex = 7;
            this->numericUpDown7->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 99, 0, 0, 0 });
            // 
            // numericUpDown8
            // 
            this->numericUpDown8->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->numericUpDown8->Location = System::Drawing::Point(70, 27);
            this->numericUpDown8->Maximum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 999999, 0, 0, 0 });
            this->numericUpDown8->Minimum = System::Decimal(gcnew cli::array< System::Int32 >(4) { 1, 0, 0, 0 });
            this->numericUpDown8->Name = L"numericUpDown8";
            this->numericUpDown8->Size = System::Drawing::Size(44, 25);
            this->numericUpDown8->TabIndex = 6;
            this->numericUpDown8->Value = System::Decimal(gcnew cli::array< System::Int32 >(4) { 10, 0, 0, 0 });
            // 
            // label6
            // 
            this->label6->AutoSize = true;
            this->label6->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label6->Location = System::Drawing::Point(14, 60);
            this->label6->Name = L"label6";
            this->label6->Size = System::Drawing::Size(56, 17);
            this->label6->TabIndex = 8;
            this->label6->Text = L"range =";
            // 
            // button25
            // 
            this->button25->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button25->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button25->Location = System::Drawing::Point(270, 73);
            this->button25->Name = L"button25";
            this->button25->Size = System::Drawing::Size(95, 34);
            this->button25->TabIndex = 12;
            this->button25->Text = L"Reverse";
            this->button25->UseVisualStyleBackColor = true;
            this->button25->Click += gcnew System::EventHandler(this, &MyForm::button25_Click);
            // 
            // MyForm
            // 
            this->AutoScaleDimensions = System::Drawing::SizeF(6, 12);
            this->AutoScaleMode = System::Windows::Forms::AutoScaleMode::Font;
            this->AutoValidate = System::Windows::Forms::AutoValidate::EnablePreventFocusChange;
            this->ClientSize = System::Drawing::Size(621, 439);
            this->Controls->Add(this->tabControl1);
            this->FormBorderStyle = System::Windows::Forms::FormBorderStyle::FixedSingle;
            this->Name = L"MyForm";
            this->Text = L"Linked List by PinkieNai";
            this->tabPage3->ResumeLayout(false);
            this->groupBox9->ResumeLayout(false);
            this->groupBox9->PerformLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown9))->EndInit();
            this->groupBox12->ResumeLayout(false);
            this->groupBox12->PerformLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown11))->EndInit();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown12))->EndInit();
            this->tabPage1->ResumeLayout(false);
            this->groupBox1->ResumeLayout(false);
            this->groupBox1->PerformLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown1))->EndInit();
            this->groupBox4->ResumeLayout(false);
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown2))->EndInit();
            this->groupBox2->ResumeLayout(false);
            this->groupBox3->ResumeLayout(false);
            this->groupBox3->PerformLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown4))->EndInit();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown3))->EndInit();
            this->tabControl1->ResumeLayout(false);
            this->tabPage2->ResumeLayout(false);
            this->groupBox5->ResumeLayout(false);
            this->groupBox5->PerformLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown5))->EndInit();
            this->groupBox6->ResumeLayout(false);
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown6))->EndInit();
            this->groupBox7->ResumeLayout(false);
            this->groupBox8->ResumeLayout(false);
            this->groupBox8->PerformLayout();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown7))->EndInit();
            (cli::safe_cast<System::ComponentModel::ISupportInitialize^>(this->numericUpDown8))->EndInit();
            this->ResumeLayout(false);

        }
#pragma endregion
    private: System::Void button1_Click(System::Object^  sender, System::EventArgs^  e)
    {
        MessageBox::Show("作者：吳淙任\n專案：Linked List 鏈結串列\n版本：ver 1.0.1\n語言：C++\n使用軟體：Visual Studio 2015\n網站：http://布丁.大平台.tw\n\n----------- 關閉該視窗即前往該網站 -----------\n\n2016/12/24 新增鏈結堆疊與環狀單向鏈結串列\n2016/12/17 完成環狀雙向鏈結串列");
        System::Diagnostics::Process::Start("http://pinkienai.website");
    }
    private: System::Void button18_Click(System::Object^  sender, System::EventArgs^  e)
    {
        MessageBox::Show("作者：吳淙任\n專案：Linked List 鏈結串列\n版本：ver 1.0.1\n語言：C++\n使用軟體：Visual Studio 2015\n網站：http://布丁.大平台.tw\n\n----------- 關閉該視窗即前往該網站 -----------\n\n2016/12/24 新增鏈結堆疊與環狀單向鏈結串列\n2016/12/17 完成環狀雙向鏈結串列");
        System::Diagnostics::Process::Start("http://pinkienai.website");
    }
    private: System::Void button30_Click(System::Object^  sender, System::EventArgs^  e)
    {
        MessageBox::Show("作者：吳淙任\n專案：Linked List 鏈結串列\n版本：ver 1.0.1\n語言：C++\n使用軟體：Visual Studio 2015\n網站：http://布丁.大平台.tw\n\n----------- 關閉該視窗即前往該網站 -----------\n\n2016/12/24 新增鏈結堆疊與環狀單向鏈結串列\n2016/12/17 完成環狀雙向鏈結串列");
        System::Diagnostics::Process::Start("http://pinkienai.website");
    }

    //---------------------------------------------------  以下環狀雙向鏈結串列
    struct Dnode *newDList(int n)
    {
        Dnode *p;
        p = new Dnode;
        p->data = n;
        p->prev = NULL;
        p->next = NULL;
        return p;
    }
    void insertDList(struct Dnode *x, struct Dnode *p)
    {
        p->prev = x;
        p->next = x->next;
        x->next->prev = p;
        x->next = p;
    }
    void deleteDList(struct Dnode *x)
    {
        if (x == first)
            richTextBox1->Text = "－No node!";
        else
        {
            x->prev->next = x->next;
            x->next->prev = x->prev;
            free(x);
        }
    }
    struct Dnode *searchDList(int target)
    {
        struct Dnode *p;
        for (p = first->next; ((p->data != target) && (p != first)); p = p->next);
        return p;
    }
    void printDList()
    { 
        struct Dnode *p;
        String ^print = "－";
        for (p = first->next; p != first; p = p->next)
            print += System::Convert::ToString(p->data) + "－";
        richTextBox1->AppendText(print + "\n");
    }
    private: System::Void button2_Click(System::Object^  sender, System::EventArgs^  e)
    { // Insert First
        int n = Convert::ToInt32(numericUpDown1->Text);
        struct Dnode *p;
        p = newDList(n);
        insertDList(first, p);
        printDList();
    }
    private: System::Void button3_Click(System::Object^  sender, System::EventArgs^  e)
    { // Insert Last
        int n = Convert::ToInt32(numericUpDown1->Text);
        struct Dnode *p;
        p = newDList(n);
        insertDList(first->prev, p);
        printDList();
    }
    private: System::Void button4_Click(System::Object^  sender, System::EventArgs^  e)
    { // Insert Before Search
        int n = Convert::ToInt32(numericUpDown2->Text);
        struct Dnode *p;
        p = searchDList(n);
        if (p == first) richTextBox1->AppendText("Not Found.\n");
        else
        {
            int x = Convert::ToInt32(numericUpDown1->Text);
            struct Dnode *q;
            q = newDList(x);
            insertDList(p->prev, q);
            printDList();
        }
    }
    private: System::Void button5_Click(System::Object^  sender, System::EventArgs^  e)
    { // Insert After Search
        int n = Convert::ToInt32(numericUpDown2->Text);
        struct Dnode *p;
        p = searchDList(n);
        if (p == first) richTextBox1->AppendText("Not Found.\n");
        else
        {
            int x = Convert::ToInt32(numericUpDown1->Text);
            struct Dnode *q;
            q = newDList(x);
            insertDList(p, q);
            printDList();
        }
    }
    private: System::Void button11_Click(System::Object^  sender, System::EventArgs^  e)
    { // Search
        int n = Convert::ToInt32(numericUpDown2->Text);
        struct Dnode *p;
        p = searchDList(n);
        if (p == first) richTextBox1->AppendText("Not Found.\n");
        else richTextBox1->AppendText("Found it!\n");
    }
    private: System::Void button9_Click(System::Object^  sender, System::EventArgs^  e)
    { // Delete First
        deleteDList(first->next);
        printDList();
    }
    private: System::Void button8_Click(System::Object^  sender, System::EventArgs^  e)
    { // Delete Last
        deleteDList(first->prev);
        printDList();
    }
    private: System::Void button7_Click(System::Object^  sender, System::EventArgs^  e)
    { // Delete Search
        int n = Convert::ToInt32(numericUpDown2->Text);
        struct Dnode *p;
        p = searchDList(n);
        if (p == first) richTextBox1->AppendText("Not Found.\n");
        else { deleteDList(p); printDList(); }
    }
    private: System::Void button6_Click(System::Object^  sender, System::EventArgs^  e)
    { // Delete ALL
        struct Dnode *p;
        while (p != first)
        {
            p = first->next;
            deleteDList(p);
        }
        richTextBox1->Clear();
    }
    private: System::Void button12_Click(System::Object^  sender, System::EventArgs^  e)
    { // Reverse
        reverseDnode(first);
        printDList();
    }
    private: System::Void button10_Click(System::Object^  sender, System::EventArgs^  e)
    { // Random Generate
        srand(time(NULL));
        int n = Convert::ToInt32(numericUpDown3->Text);
        int range = Convert::ToInt32(numericUpDown4->Text);
        for (int i = 0; i < n; i++)
        {
            struct Dnode *p;
            p = newDList(rand() % range + 1);
            insertDList(first, p);
        }
        printDList();
    }

    void reverseDnode(struct Dnode *x) //單雙向共用的副程式
    {
        struct Dnode *r, *s, *t;
        r = x;
        s = NULL;
        while (r != NULL)
        {
            t = s;
            s = r;
            r = r->next;
            s->next = t;
        }
        x = s;
    }
    //--------------------------------------------------- 以下環狀單向鏈結串列
    struct Dnode *newDnode(int n)
    {
        Dnode *p;
        p = new Dnode;
        p->data = n;
        p->next = NULL;
        return p;
    }
    void insertDnode(struct Dnode *x, struct Dnode *p)
    {
        p->next = x->next;
        x->next = p;
        if (x == tail) //insertFirst如只有一個開頭空節點先新增一個在尾巴
            tail = p;
    }
    int deleteDnode(struct Dnode *x)
    {
        struct Dnode *p, *singly_prev;
        if (x == head) return -1;
        if (x == head->next)
            head->next = x->next;
        else
        {
            p = head->next;
            while (p->next != x->next)
            {
                singly_prev = p;
                p = p->next;
            }
            if (x == tail)
                singly_prev->next = head;
            else
                singly_prev->next = x->next;
        }
        free(x);
        return 0; //隨意 只是回傳給else用的
    }
    struct Dnode *searchDnode(int target)
    {
        struct Dnode *p;
        for (p = head->next; ((p->data != target) && (p != head)); p = p->next);
        return p;
    }
    void printDnode()
    {
        struct Dnode *p;
        String ^print = "－";
        for (p = head->next; p != head; p = p->next)
            print += System::Convert::ToString(p->data) + "－";
        richTextBox2->AppendText(print + "\n");
    }
    private: System::Void button16_Click(System::Object^  sender, System::EventArgs^  e)
    { // Insert First
        int n = Convert::ToInt32(numericUpDown5->Text);
        struct Dnode *p;
        p = newDnode(n);
        insertDnode(head, p);
        printDnode();
    }
    private: System::Void button15_Click(System::Object^  sender, System::EventArgs^  e)
    { // Insert Last
        int n = Convert::ToInt32(numericUpDown5->Text);
        struct Dnode *p;
        p = newDnode(n);
        insertDnode(tail, p);
        printDnode();
    }
    private: System::Void button14_Click(System::Object^  sender, System::EventArgs^  e)
    { // Insert Before Search
        int n = Convert::ToInt32(numericUpDown6->Text);
        struct Dnode *p; //p從head開始 條件是p的下下個為n就跳出
        for (p = head; ((p->next->data != n) && (p->next != head)); p = p->next);
        if (p->next == head) richTextBox2->AppendText("Not Found.\n");
        else
        {
            int x = Convert::ToInt32(numericUpDown5->Text);
            struct Dnode *q;
            q = newDnode(x);
            insertDnode(p, q);
            printDnode();
        }
    }
    private: System::Void button13_Click(System::Object^  sender, System::EventArgs^  e)
    { // Insert After Search
        int n = Convert::ToInt32(numericUpDown6->Text);
        struct Dnode *p;
        p = searchDnode(n);
        if (p == head) richTextBox2->AppendText("Not Found.\n");
        else
        {
            int x = Convert::ToInt32(numericUpDown5->Text);
            struct Dnode *q;
            q = newDnode(x);
            insertDnode(p, q);
            printDnode();
        }
    }
    private: System::Void button17_Click(System::Object^  sender, System::EventArgs^  e)
    { // Search
        int n = Convert::ToInt32(numericUpDown6->Text);
        struct Dnode *p;
        p = searchDnode(n);
        if (p == head) richTextBox2->AppendText("Not Found.\n");
        else richTextBox2->AppendText("Found it!\n");
    }
    private: System::Void button23_Click(System::Object^  sender, System::EventArgs^  e)
    { // Delete First
        if (deleteDnode(head->next) == -1)
            richTextBox2->Text = "－No node!－\n";
        else
            printDnode();
    }
    private: System::Void button22_Click(System::Object^  sender, System::EventArgs^  e)
    { // Delete Last
        if (deleteDnode(tail) == -1)
            richTextBox2->Text = "－No node!－\n";
        else
            printDnode();
    }
    private: System::Void button21_Click(System::Object^  sender, System::EventArgs^  e)
    { // Delete Search
        int n = Convert::ToInt32(numericUpDown6->Text);
        struct Dnode *p;
        p = searchDnode(n);
        if (p == head) richTextBox2->AppendText("Not Found.\n");
        else { deleteDnode(p); printDnode(); }
    }
    private: System::Void button20_Click(System::Object^  sender, System::EventArgs^  e)
    { // Delete ALL
        struct Dnode *p;
        while (p != head)
        {
            p = head->next;
            deleteDnode(p);
        }
        richTextBox2->Clear();
    }
    private: System::Void button19_Click(System::Object^  sender, System::EventArgs^  e)
    { // Reverse
        reverseDnode(head);
        printDnode();
    }
    private: System::Void button24_Click(System::Object^  sender, System::EventArgs^  e)
    { // Random Generate
        srand(time(NULL));
        int n = Convert::ToInt32(numericUpDown8->Text);
        int range = Convert::ToInt32(numericUpDown7->Text);
        for (int i = 0; i < n; i++)
        {
            struct Dnode *p;
            p = newDnode(rand() % range + 1);
            insertDnode(head, p);
        }
        printDnode();
    }

    //---------------------------------------------------  以下鏈結堆疊
    bool flag = true; //現在在哪個堆疊
    void push(int value)
    {
        struct Dnode *n;
        n = new Dnode;
        if (n == NULL)
            richTextBox3->AppendText("Stack Empty\n");
        n->data = value;
        n->next = top;
        top = n;
    }
    int pop()
    {
        int temp;
        struct Dnode *p;
        if (top != NULL)
        {
            p = top;
            top = top->next;
            temp = p->data;
            free(p);
            return temp;
        }
        else
            return -1;
    }
    void printDstack()
    {
        struct Dnode *p;
        String ^print = "－";
        for (p = top; p != NULL; p = p->next)
            print += System::Convert::ToString(p->data) + "－";
        richTextBox3->AppendText(print + "\n");
    }
    void rePush(int value)
    {
        struct Dnode *n;
        n = new Dnode;
        if (n == NULL)
            richTextBox3->AppendText("Stack Empty\n");
        n->data = value;
        n->next = reTop;
        reTop = n;
    }
    int rePop()
    {
        int temp;
        struct Dnode *p;
        if (reTop != NULL)
        {
            p = reTop;
            reTop = reTop->next;
            temp = p->data;
            free(p);
            return temp;
        }
        else
            return -1;
    }
    void printDreStack()
    {
        struct Dnode *p;
        String ^print = "－";
        for (p = reTop; p != NULL; p = p->next)
            print += System::Convert::ToString(p->data) + "－";
        richTextBox3->AppendText(print + "\n");
    }
    private: System::Void button28_Click(System::Object^  sender, System::EventArgs^  e)
    { // Push Number
        int n = Convert::ToInt32(numericUpDown9->Text);
        if (flag)
        { push(n); printDstack(); }
        else
        { rePush(n); printDreStack(); }
    }
    private: System::Void button27_Click(System::Object^  sender, System::EventArgs^  e)
    { // Pop Number
        int n = Convert::ToInt32(numericUpDown9->Text);
        int result;

        if (flag)
        { result = pop(); printDstack(); }
        else
        { result = rePop(); printDreStack(); }

        if (result == -1)
        {
            richTextBox3->AppendText("Stack Empty\n");
            label10->Text = "Stack Empty";
        }
        else
            label10->Text = System::Convert::ToString(result);
    }
    private: System::Void button26_Click(System::Object^  sender, System::EventArgs^  e)
    { // Clear
        while (pop() != -1);
        while (rePop() != -1);
        label10->Text = "Result";
        richTextBox3->Clear();
    }
    private: System::Void button25_Click(System::Object^  sender, System::EventArgs^  e)
    { // Reverse
        int n;
        if (flag)
        {
            n = pop();
            while (n != -1)
            { rePush(n); n = pop(); }
            flag = false;
            printDreStack();
        }
        else
        {
            n = rePop();
            while (n != -1)
            { push(n); n = rePop(); }
            flag = true;
            printDstack();
        }
    }
    private: System::Void button36_Click(System::Object^  sender, System::EventArgs^  e)
    { // Random Push
        srand(time(NULL));
        int n = Convert::ToInt32(numericUpDown8->Text);
        int range = Convert::ToInt32(numericUpDown7->Text);
        if (flag)
        {
            for (int i = 0; i < n; i++)
                push(rand() % range + 1);
            printDstack();
        }
        else
        {
            for (int i = 0; i < n; i++)
                rePush(rand() % range + 1); 
            printDreStack();
        }
    }
};
}

        </textarea>
        <h3 id="fix">　</h3><h3>　</h3>
        <h4>前中後序運算式轉換</h4>
        <div id="videotext">
            【因為1+1的一句話】<br>
            專案：前中後序運算式轉換（附帶計算機功能）<br>
            版本：ver 1.0.1<br>
            語言：C++ <a href="https://doc-08-4c-docs.googleusercontent.com/docs/securesc/ha0ro937gcuc7l7deffksulhg5h7mbp1/001dvgaipr9hei3pss3vtrocdebljf97/1482652800000/07559736078994184253/*/0B5i9SrYcHxlBRWlYTUdLVmtUTnM?e=download" style="text-decoration:none;">執行檔</a><br>
            使用軟體：Visual Studio 2015<br>
            網站：<a href="http://布丁.大平台.tw" style="text-decoration:none;">http://布丁.大平台.tw</a><br>
            備註：這是紀錄，並非教學呦～ 話說剛好700行 XD<br>
        </div>
        <br>* 計算機不支援浮點數。
        <br>* 前後序輸入只能為A+C，並不支援AB+C或是1B+C等相黏運算元。
        <br>* 運算子只包含 + - * / ^ 及 ( )。
        <br><br>
        <iframe width="450" height="470" src="https://www.youtube.com/embed/oyxM4WeYesc" frameborder="0" allowfullscreen></iframe><br><br><br>
        <textarea readonly="readonly">
#pragma once
#include <cmath>
#define max_size 100
int c_stack[max_size];
int dig[max_size];

namespace calculator {

    using namespace System;
    using namespace System::ComponentModel;
    using namespace System::Collections;
    using namespace System::Windows::Forms;
    using namespace System::Data;
    using namespace System::Drawing;

    /// <summary>
    /// MyForm 的摘要
    /// </summary>
    public ref class MyForm : public System::Windows::Forms::Form
    {
    public:
        MyForm(void)
        {
            InitializeComponent();
            //
            //TODO:  在此加入建構函式程式碼
            //
        }

    protected:
        /// <summary>
        /// 清除任何使用中的資源。
        /// </summary>
        ~MyForm()
        {
            if (components)
            {
                delete components;
            }
        }

    private: System::Windows::Forms::RadioButton^  radioButton4;
    private: System::Windows::Forms::RadioButton^  radioButton7;



    private: System::Windows::Forms::RadioButton^  radioButton6;

    private: System::Windows::Forms::RadioButton^  radioButton5;




    private: System::Windows::Forms::RichTextBox^  richTextBox1;


    private: System::Windows::Forms::Label^  label1;
    private: System::Windows::Forms::Button^  button1;
    private: System::Windows::Forms::Button^  button2;
    private: System::Windows::Forms::TextBox^  textBox1;
    private: System::Windows::Forms::GroupBox^  groupBox1;
    private: System::Windows::Forms::GroupBox^  groupBox2;
    private: System::Windows::Forms::RadioButton^  radioButton1;
    private: System::Windows::Forms::RadioButton^  radioButton3;


    private: System::Windows::Forms::RadioButton^  radioButton2;
    private: System::Windows::Forms::ComboBox^  comboBox1;
    private: System::Windows::Forms::Button^  button3;


    protected:

    private:
        /// <summary>
        /// 設計工具所需的變數。
        /// </summary>
        System::ComponentModel::Container ^components;

#pragma region Windows Form Designer generated code
        /// <summary>
        /// 此為設計工具支援所需的方法 - 請勿使用程式碼編輯器修改
        /// 這個方法的內容。
        /// </summary>
        void InitializeComponent(void)
        {
            this->radioButton4 = (gcnew System::Windows::Forms::RadioButton());
            this->radioButton7 = (gcnew System::Windows::Forms::RadioButton());
            this->radioButton6 = (gcnew System::Windows::Forms::RadioButton());
            this->radioButton5 = (gcnew System::Windows::Forms::RadioButton());
            this->richTextBox1 = (gcnew System::Windows::Forms::RichTextBox());
            this->label1 = (gcnew System::Windows::Forms::Label());
            this->button1 = (gcnew System::Windows::Forms::Button());
            this->button2 = (gcnew System::Windows::Forms::Button());
            this->textBox1 = (gcnew System::Windows::Forms::TextBox());
            this->groupBox1 = (gcnew System::Windows::Forms::GroupBox());
            this->groupBox2 = (gcnew System::Windows::Forms::GroupBox());
            this->radioButton1 = (gcnew System::Windows::Forms::RadioButton());
            this->radioButton3 = (gcnew System::Windows::Forms::RadioButton());
            this->radioButton2 = (gcnew System::Windows::Forms::RadioButton());
            this->comboBox1 = (gcnew System::Windows::Forms::ComboBox());
            this->button3 = (gcnew System::Windows::Forms::Button());
            this->groupBox1->SuspendLayout();
            this->groupBox2->SuspendLayout();
            this->SuspendLayout();
            // 
            // radioButton4
            // 
            this->radioButton4->AutoSize = true;
            this->radioButton4->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->radioButton4->Location = System::Drawing::Point(20, 26);
            this->radioButton4->Name = L"radioButton4";
            this->radioButton4->Size = System::Drawing::Size(65, 21);
            this->radioButton4->TabIndex = 1;
            this->radioButton4->Text = L"二進位";
            this->radioButton4->UseVisualStyleBackColor = true;
            // 
            // radioButton7
            // 
            this->radioButton7->AutoSize = true;
            this->radioButton7->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->radioButton7->Location = System::Drawing::Point(20, 107);
            this->radioButton7->Name = L"radioButton7";
            this->radioButton7->Size = System::Drawing::Size(78, 21);
            this->radioButton7->TabIndex = 2;
            this->radioButton7->Text = L"十六進位";
            this->radioButton7->UseVisualStyleBackColor = true;
            // 
            // radioButton6
            // 
            this->radioButton6->AllowDrop = true;
            this->radioButton6->AutoSize = true;
            this->radioButton6->Checked = true;
            this->radioButton6->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->radioButton6->Location = System::Drawing::Point(20, 80);
            this->radioButton6->Name = L"radioButton6";
            this->radioButton6->Size = System::Drawing::Size(65, 21);
            this->radioButton6->TabIndex = 3;
            this->radioButton6->TabStop = true;
            this->radioButton6->Text = L"十進位";
            this->radioButton6->UseVisualStyleBackColor = true;
            // 
            // radioButton5
            // 
            this->radioButton5->AutoSize = true;
            this->radioButton5->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->radioButton5->Location = System::Drawing::Point(20, 53);
            this->radioButton5->Name = L"radioButton5";
            this->radioButton5->Size = System::Drawing::Size(65, 21);
            this->radioButton5->TabIndex = 4;
            this->radioButton5->Text = L"八進位";
            this->radioButton5->UseVisualStyleBackColor = true;
            // 
            // richTextBox1
            // 
            this->richTextBox1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 11.25F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->richTextBox1->Location = System::Drawing::Point(150, 95);
            this->richTextBox1->Name = L"richTextBox1";
            this->richTextBox1->ReadOnly = true;
            this->richTextBox1->Size = System::Drawing::Size(256, 313);
            this->richTextBox1->TabIndex = 6;
            this->richTextBox1->Text = L"";
            // 
            // label1
            // 
            this->label1->AutoSize = true;
            this->label1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->label1->Location = System::Drawing::Point(12, 11);
            this->label1->Name = L"label1";
            this->label1->Size = System::Drawing::Size(73, 20);
            this->label1->TabIndex = 7;
            this->label1->Text = L"運算式：";
            // 
            // button1
            // 
            this->button1->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button1->Location = System::Drawing::Point(12, 373);
            this->button1->Name = L"button1";
            this->button1->Size = System::Drawing::Size(114, 35);
            this->button1->TabIndex = 8;
            this->button1->Text = L"計算";
            this->button1->UseMnemonic = false;
            this->button1->UseVisualStyleBackColor = true;
            this->button1->Click += gcnew System::EventHandler(this, &MyForm::button1_Click);
            // 
            // button2
            // 
            this->button2->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button2->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->button2->Location = System::Drawing::Point(379, 36);
            this->button2->Name = L"button2";
            this->button2->Size = System::Drawing::Size(26, 29);
            this->button2->TabIndex = 9;
            this->button2->Text = L"C";
            this->button2->UseMnemonic = false;
            this->button2->UseVisualStyleBackColor = true;
            this->button2->Click += gcnew System::EventHandler(this, &MyForm::button2_Click);
            // 
            // textBox1
            // 
            this->textBox1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->textBox1->Location = System::Drawing::Point(12, 36);
            this->textBox1->Name = L"textBox1";
            this->textBox1->Size = System::Drawing::Size(362, 29);
            this->textBox1->TabIndex = 10;
            this->textBox1->Text = L"a*b+(c-d)/e";
            // 
            // groupBox1
            // 
            this->groupBox1->Controls->Add(this->radioButton4);
            this->groupBox1->Controls->Add(this->radioButton6);
            this->groupBox1->Controls->Add(this->radioButton7);
            this->groupBox1->Controls->Add(this->radioButton5);
            this->groupBox1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox1->Location = System::Drawing::Point(12, 218);
            this->groupBox1->Name = L"groupBox1";
            this->groupBox1->Size = System::Drawing::Size(114, 140);
            this->groupBox1->TabIndex = 11;
            this->groupBox1->TabStop = false;
            this->groupBox1->Text = L"進位制";
            // 
            // groupBox2
            // 
            this->groupBox2->Controls->Add(this->radioButton1);
            this->groupBox2->Controls->Add(this->radioButton3);
            this->groupBox2->Controls->Add(this->radioButton2);
            this->groupBox2->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 12, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->groupBox2->Location = System::Drawing::Point(12, 86);
            this->groupBox2->Name = L"groupBox2";
            this->groupBox2->Size = System::Drawing::Size(114, 113);
            this->groupBox2->TabIndex = 12;
            this->groupBox2->TabStop = false;
            this->groupBox2->Text = L"運算";
            // 
            // radioButton1
            // 
            this->radioButton1->AutoSize = true;
            this->radioButton1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->radioButton1->Location = System::Drawing::Point(20, 26);
            this->radioButton1->Name = L"radioButton1";
            this->radioButton1->Size = System::Drawing::Size(52, 21);
            this->radioButton1->TabIndex = 1;
            this->radioButton1->Text = L"前序";
            this->radioButton1->UseVisualStyleBackColor = true;
            // 
            // radioButton3
            // 
            this->radioButton3->AutoSize = true;
            this->radioButton3->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->radioButton3->Location = System::Drawing::Point(20, 80);
            this->radioButton3->Name = L"radioButton3";
            this->radioButton3->Size = System::Drawing::Size(52, 21);
            this->radioButton3->TabIndex = 3;
            this->radioButton3->Text = L"中序";
            this->radioButton3->UseVisualStyleBackColor = true;
            // 
            // radioButton2
            // 
            this->radioButton2->AutoSize = true;
            this->radioButton2->Checked = true;
            this->radioButton2->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->radioButton2->Location = System::Drawing::Point(20, 53);
            this->radioButton2->Name = L"radioButton2";
            this->radioButton2->Size = System::Drawing::Size(52, 21);
            this->radioButton2->TabIndex = 4;
            this->radioButton2->TabStop = true;
            this->radioButton2->Text = L"後序";
            this->radioButton2->UseVisualStyleBackColor = true;
            // 
            // comboBox1
            // 
            this->comboBox1->Font = (gcnew System::Drawing::Font(L"微軟正黑體", 11.25F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(136)));
            this->comboBox1->FormattingEnabled = true;
            this->comboBox1->Items->AddRange(gcnew cli::array< System::Object^  >(17) {
                L"*+abc", L"ab+c*", L"(a+b)*c", L"-----------------",
                    L"+-/a/bc-dfg", L"abc//df--g+", L"a/(b/c)-(d-f)+g", L"-----------------", L"+*ab/-cde", L"ab*cd-e/+", L"a*b+(c-d)/e", L"-----------------",
                    L"56/8+2^5-3*4", L"-----------------", L"++A*-BC^D+E/FG/H**I^JK-LM", L"ABC-DEFG/+^*+HIJK^*LM-*/+", L"A+(B-C)*D^(E+F/G)+H/(I*J^K*(L-M))"
            });
            this->comboBox1->Location = System::Drawing::Point(254, 6);
            this->comboBox1->Name = L"comboBox1";
            this->comboBox1->Size = System::Drawing::Size(120, 27);
            this->comboBox1->TabIndex = 13;
            this->comboBox1->Text = L"-> 範例運算式";
            this->comboBox1->SelectedIndexChanged += gcnew System::EventHandler(this, &MyForm::comboBox1_SelectedIndexChanged);
            // 
            // button3
            // 
            this->button3->BackColor = System::Drawing::Color::FromArgb(static_cast<System::Int32>(static_cast<System::Byte>(255)), static_cast<System::Int32>(static_cast<System::Byte>(245)),
                static_cast<System::Int32>(static_cast<System::Byte>(255)));
            this->button3->FlatAppearance->BorderColor = System::Drawing::Color::FromArgb(static_cast<System::Int32>(static_cast<System::Byte>(255)),
                static_cast<System::Int32>(static_cast<System::Byte>(245)), static_cast<System::Int32>(static_cast<System::Byte>(255)));
            this->button3->FlatAppearance->BorderSize = 3;
            this->button3->FlatStyle = System::Windows::Forms::FlatStyle::Popup;
            this->button3->Font = (gcnew System::Drawing::Font(L"Square721 BT", 9.75F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
                static_cast<System::Byte>(0)));
            this->button3->ForeColor = System::Drawing::Color::Black;
            this->button3->Location = System::Drawing::Point(342, 70);
            this->button3->Name = L"button3";
            this->button3->RightToLeft = System::Windows::Forms::RightToLeft::Yes;
            this->button3->Size = System::Drawing::Size(63, 21);
            this->button3->TabIndex = 14;
            this->button3->Text = L"Author";
            this->button3->TextAlign = System::Drawing::ContentAlignment::TopCenter;
            this->button3->UseMnemonic = false;
            this->button3->UseVisualStyleBackColor = false;
            this->button3->Click += gcnew System::EventHandler(this, &MyForm::button3_Click);
            // 
            // MyForm
            // 
            this->AutoScaleDimensions = System::Drawing::SizeF(6, 12);
            this->AutoScaleMode = System::Windows::Forms::AutoScaleMode::Font;
            this->ClientSize = System::Drawing::Size(426, 427);
            this->Controls->Add(this->button3);
            this->Controls->Add(this->comboBox1);
            this->Controls->Add(this->groupBox2);
            this->Controls->Add(this->groupBox1);
            this->Controls->Add(this->textBox1);
            this->Controls->Add(this->button2);
            this->Controls->Add(this->button1);
            this->Controls->Add(this->label1);
            this->Controls->Add(this->richTextBox1);
            this->FormBorderStyle = System::Windows::Forms::FormBorderStyle::FixedSingle;
            this->Name = L"MyForm";
            this->Text = L"Calculator by PinkieNai";
            this->groupBox1->ResumeLayout(false);
            this->groupBox1->PerformLayout();
            this->groupBox2->ResumeLayout(false);
            this->groupBox2->PerformLayout();
            this->ResumeLayout(false);
            this->PerformLayout();

        }
#pragma endregion
    private: System::Void linkLabel1_LinkClicked(System::Object^  sender, System::Windows::Forms::LinkLabelLinkClickedEventArgs^  e) 
    {
        System::Diagnostics::Process::Start("http://pinkienai.website");
    }
    private: System::Void button3_Click(System::Object^  sender, System::EventArgs^  e)
    {
        MessageBox::Show("作者：吳淙任\n專案：前中後序運算式轉換（附帶計算機功能）\n版本：ver 1.0.1\n語言：C++\n使用軟體：Visual Studio 2015\n網站：http://布丁.大平台.tw\n\n----------- 關閉該視窗即前往該網站 -----------\n\n2016/12/09 修正abc/*轉中序時少了括號\n2016/12/06 完成前中後序互轉\n2016/12/04 完成中轉前後序與計算機");
        System::Diagnostics::Process::Start("http://pinkienai.website");
    }
    private: System::Void button2_Click(System::Object^  sender, System::EventArgs^  e) 
    {
        textBox1->Clear();
    }

    static array <String ^> ^ Stack = gcnew array <String ^>(max_size);
    static array <String ^> ^ Stack_another = gcnew array <String ^>(max_size);
    int top = -1;
    int top_another = -1;
    int c_top = -1;
    int i;
    int cou;
    bool number; //有無數字

    int whatfix(String ^infix)
    {
        if (IsOperat(infix[0])) //前序式
            return 1;
        else if (IsOperat(infix[infix->Length - 1])) //後序式
            return 2;
        else //中序式
            return 3;
    }

    bool IsOperat(wchar_t s) //判斷是否為運算子(不含括號)
    {
        if ((s == '+') || (s == '-') || (s == '*') || (s == '/') || (s == '^') || (s == '&') || (s == '|') || (s == '!'))
            return true;
        else
            return false;
    }

    bool IsOperator(wchar_t s) //判斷是否為運算子(含括號)
    {
        if ((s == '+') || (s == '-') || (s == '*') || (s == '/') || (s == '(') || (s == ')') || (s == '^') || (s == '&') || (s == '|') || (s == '!') || (s == '[') || (s == ']'))
            return true;
        else
            return false;
    }

    int p(String^ s) //push排名
    {
        if ((s == "+") || (s == "-")) return 3;
        else if ((s == "*") || (s == "/")) return 4;
        else if (s == "^") return 6;
        else if (s == "(") return 8;
        else if (s == "[") return 9;
        else return 0;
    }

    int q(String^ s) //pop排名
    {
        if ((s == "+") || (s == "-")) return 3;
        else if ((s == "*") || (s == "/")) return 4;
        else if (s == "^") return 6;
        else if (s == "(") return 2;
        else if (s == "[") return 1;
        else return 0;
    }

    void push(int flag, String ^data) //轉序用
    {
        switch (flag)
        {
        case 1:
            if (top == max_size - 1) richTextBox1->Text = "Full\n";

            else Stack[++top] = data;
            break;
        case 2:
            if (top_another == max_size - 1) richTextBox1->Text = "Full\n";
            else Stack_another[++top_another] = data;
            break;
        }
    }

    String ^pop(int flag) //轉序用
    {
        switch (flag)
        {
        case 1:
            if (top == -1) richTextBox1->Text = "Empty\n";
            else return Stack[top--];
            break;
        case 2:
            if (top_another == -1) richTextBox1->Text = "Empty\n";
            else return Stack_another[top_another--];
            break;
        }
    }

    String ^fix2infix(String ^infix, int flag) //----------------------------- 前後序轉中
    {   
        // flag=1 表輸入為前序，flag=2 表輸入為後序。
        String ^s;
        String ^x;
        int m;
        int k = 0;

        if (flag == 3) //中序轉中序直接回傳自己
            return infix;

        for (m = 0; m < infix->Length; m++)
        {
            if (flag == 1) //前序轉中序是倒著讀入的
                i = infix->Length - 1 - m;
            else //後序轉中序正常讀入
                i = m;

            s = "";
            s += infix[i];

            if (!IsOperator(infix[i]))
            {
                push(2, s);
                push(1, "#");
            }
            else
            {
                String ^op1 = pop(1);
                String ^op2 = pop(1);
                String ^a = pop(2);
                String ^b = pop(2);

                if (p(op1) == 0 && p(op2) == 0)
                    get_infix(s, flag, a, b);
                else
                    get_infix(s, flag, brackets(s, a, op1, flag, 2), brackets(s, b, op2, flag, 1));
            }
        }
        return pop(2);
    }

    String ^brackets(String ^x, String ^c, String ^op, int flag, int number) //判斷是否要加括號
    {
        // x為現在的運算子、c為要處理的運算元、op為要處理的運算子、flag為輸入的運算式whatfix、number為前(1)序或後(2)序
        if ((p(x) > p(op)) && (p(op) != 0))
            c = "(" + c + ")";
        else if (p(x) == p(op))
        {
            if ((x == op) && (flag == number) && (x == "-" || x == "/"))
                c = "(" + c + ")";
            else if ((x != op) && (flag == number))
                c = "(" + c + ")";
        }
        return c;
    }

    void get_infix(String ^x, int flag, String ^a, String ^b) //產生中序運算式
    {
        push(1, x);
        x = (flag == 1) ? a + x + b : b + x + a;
        push(2, x);
    }

    String ^infix2postfix(String ^infix, int flag) //----------------------------- 中轉前後序
    {
        String ^s;
        String ^x;
        int k = 0;

        push(1, "#");
        for (i = 0; i < infix->Length; i++)
        {
            s = "";
            s += infix[i];

            if (!IsOperator(infix[i]))
            {
                if (number) //計算數字
                {
                    s = "";
                    for (int j = i; j < i + dig[k]; j++)
                        s += infix[j];
                    i += dig[k] - 1;
                    k++;
                }
                push(2, s);
            }
            else if (s == ")")
            {
                while ((x = pop(1)) != "(")
                    get_fix(x, flag);
            }
            else
            {
                while (p(s) <= q(Stack[top]))
                {
                    x = pop(1);
                    get_fix(x, flag);
                }
                push(1, s);
            }
        }
        while (Stack[top] != "#")
        {
            x = pop(1);
            get_fix(x, flag);
        }
        pop(1);
        return pop(2);
    }

    void get_fix(String ^x, int flag) //產生運算式
    {
        String ^a = pop(2);
        a = (flag == 1) ? x + pop(2) + a : pop(2) + a + x;
        push(2, a);
    }

    void c_push(int s) //計算用
    {
        if (c_top == max_size - 1) richTextBox1->Text = "Full\n";
        else c_stack[++c_top] = s;
    }

    int c_pop() //計算用
    {   
        if (c_top == -1) richTextBox1->Text = "Empty\n";
        else return c_stack[c_top--];
    }

    int calculate(String ^postfix) //----------------------------- 計算答案
    {
        wchar_t token;
        int x;
        int i, j, temp = 0;
        int number;

        for (i = 0; i < postfix->Length; i++)
        {   
            token = postfix[i];
            if (token >= 48 && token <= 57)
            {
                number = 0;
                for (j = dig[temp] - 1; j >= 0; j--)
                {
                    token = postfix[i++];
                    number = number + (token - 48) * pow(10, j);
                }
                c_push(number);
                i--;
                temp++;
            }
            else
            {
                x = c_pop();
                switch (postfix[i])
                {
                case '+':
                    c_push(c_pop() + x);
                    break;
                case '-':
                    c_push(c_pop() - x);
                    break;
                case '*':
                    c_push(c_pop() * x);
                    break;
                case '/':
                    c_push(c_pop() / x);
                    break;
                case '^':
                    c_push(pow(c_pop(), x));
                    break;
                }
            }
        }
        return c_pop();
    }

    void count(String ^infix) //計算有幾位數
    {
        int co = 0;
        cou = 0;

        infix += "+"; //為了讓前面的數字讀到而加上去的字元
        for (i = 0; i < infix->Length; i++)
        {
            if (infix[i] >= 48 && infix[i] <= 57)
                co++;
            else
            {
                if (co > 0)
                    dig[cou++] = co;
                co = 0;
            }
        }
        cou--;
    }

    String ^bin(int ans, int bin) //處理進制
    {
        String ^Answer = "";
        int tmp;
        while (ans)
        {
            tmp = ans % bin;
            if (bin == 16 && tmp > 9)
                Answer = System::Convert::ToChar(tmp - 10 + 65) + Answer;
            else
                Answer = System::Convert::ToString(tmp) + Answer;
            ans /= bin;
        }
        return Answer;
    }

    private: System::Void button1_Click(System::Object^  sender, System::EventArgs^  e) 
    {
        String ^infix = textBox1->Text;
        number = false;
        for (int i = 0; i < infix->Length; i++)
            if (infix[i] >= '0' && infix[i] <= '9') number = true;
        count(infix);

        //richTextBox1->AppendText(infix + " => ");

        if (radioButton1->Checked) //----------------------------- 前序
            richTextBox1->AppendText(infix2postfix(fix2infix(infix, whatfix(infix)), 1));
        else if (radioButton2->Checked) //----------------------------- 後序
            richTextBox1->AppendText(infix2postfix(fix2infix(infix, whatfix(infix)), 2));
        else if (radioButton3->Checked) //----------------------------- 中序
            richTextBox1->AppendText(fix2infix(infix, whatfix(infix)));

        if (number)
            if (radioButton4->Checked) //二進位
                richTextBox1->AppendText(" = " + bin(calculate(infix2postfix(infix, 2)), 2));
            else if (radioButton5->Checked) //八進位
                richTextBox1->AppendText(" = " + bin(calculate(infix2postfix(infix, 2)), 8));
            else if (radioButton6->Checked) //十進位
                richTextBox1->AppendText(" = " + System::Convert::ToString(calculate(infix2postfix(infix, 2)), 10));
            else if (radioButton7->Checked) //十六進位
                richTextBox1->AppendText(" = " + bin(calculate(infix2postfix(infix, 2)), 16));
        
        richTextBox1->AppendText("\n");
    }
    private: System::Void comboBox1_SelectedIndexChanged(System::Object^  sender, System::EventArgs^  e) 
    {
        textBox1->Clear();
        textBox1->Text = System::Convert::ToString(comboBox1->SelectedItem);
    }
};
}
        </textarea>
        <!--<h4>尚未新增文章</h4>
        <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FYui.Hirasawa.320%2Fvideos%2F1307612202594900%2F&show_text=1&width=560" width="500" height="645" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>-->
        <h2>NOTHING</h2>
        <!--三秒彩蛋-->
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D1294277273928393%26set%3Da.511216785567783.112081.100000383979215%26type%3D3&width=500" width="290" height="589" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
        <!--松鼠姊姊-->
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FYui.Hirasawa.320%2Fposts%2F1301306003225520&width=500" width="290" height="589" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
        <h2>Curriculum</h2>
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FYui.Hirasawa.320%2Fposts%2F1330127547010032&width=500" width="280" height="589" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
    </div>
</div>
<div id="sidebar">
    <div id="follow">
        <iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2FYui.Hirasawa.320&width=66&height=65&layout=box_count&size=large&show_faces=true&appId" width="66" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>

    <div id="Fold-Out">
    <ul class="share"> 
        <li>
            <div class="social-link">  
                <div class="nav-label">
                <span onclick="location.href='about.php'">CONTACT ME</span>
                </div>
            </div>
        </li>
        <li>
            <div class="social-link">  
                <div class="nav-label">
                <span onclick="location.href='support.php'">SUPPORT ME</span>
                </div>
            </div>
        </li>
    </ul>
    </div>

    <div class="tag">
        <a href="#linked" style="text-decoration:none;"><h6>串列</h6></a>
    </div>
    <br><br><br>
    <div class="tag">
        <a href="#fix" style="text-decoration:none;"><h6>序式</h6></a>
    </div>
</div>

<div class="header">
    <a href="#menu"><span><img src="menu.gif" style="width: 50px;"></span></a>
</div>

<div id="webTop">
    <nav class="menu">
        <ul>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="pony.php#Story">PONY</a></li>
            <li>
                <a id="here">ARTICLE</a>
                <ul>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gamePM.php">Pokémon Go</a></li>
                    <li><a href="gameLOL.php">LOL</a></li>
                    <li><a href="index.php">Back Index</a></li>
                </ul>
            </li>
            <li><img id="title" src="title.png" width="450"/></li>
            <li><a href="link.php">LINK</a></li>
            <li><a href="video.php#Recent">VIDEO</a></li>
            <li><a href="store.php">SHOP</a></li>
            <li id="supportbutton"><a href="support.php">SUPPORT</a></li>
        </ul>
    </nav>
    <nav id="menu">
        <ul>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="pony.php">PONY</a></li>
            <li>
                <a id="here">ARTICLE</a>
                <ul>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gamePM.php">Pokémon Go</a></li>
                    <li><a href="gameLOL.php">LOL</a></li>
                    <li><a href="index.php">Back Index</a></li>
                </ul>
            </li>
            <li><img id="title" src="title.png" width="450"/></li>
            <li><a href="link.php">LINK</a></li>
            <li><a href="video.php">VIDEO</a></li>
            <li><a href="store.php">SHOP</a></li>
            <li id="supportbutton"><a href="support.php">SUPPORT</a></li>
        </ul>
    </nav>
</div>
</body>
    <script type="text/javascript" src="Browser.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.0.js"></script>
    <script type="text/javascript" src="jquery.mmenu.all.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('nav#menu').mmenu();
        });
    </script>
    <script type="text/javascript" src="top.js"></script>
</html>
<link rel="stylesheet" type="text/css" href="./body.css">
<link rel="stylesheet" type="text/css" href="./foldout.css">
<link rel="stylesheet" type="text/css" href="./blog.css">
