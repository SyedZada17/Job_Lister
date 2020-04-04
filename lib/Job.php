<?php
  class Job {
      private $db;
      //Constructor
      public function __construct(){
          $this->db = new Database;
      }
      //Get all jobs
      public function getAllJobs(){
        $this->db->query("SELECT jobs.*, categories.name AS cname 
                         FROM jobs 
                         INNER JOIN categories
                         ON jobs.category_id = categories.id 
                         ORDER BY post_date DESC
                          ");
          //Assign results 
          $results = $this->db->resultSet();

          return $results;
        }

        public function getcategories(){
          $this->db->query("SELECT*FROM categories");
          $results = $this->db->resultSet();
          return $results;
        }

        public function getByCategory($category){
          $this->db->query("SELECT jobs.*, categories.name AS cname 
                           FROM jobs 
                           INNER JOIN categories
                           ON jobs.category_id = categories.id
                           WHERE jobs.category_id = $category 
                           ORDER BY post_date DESC
                            ");
            //Assign results 
            $results = $this->db->resultSet();
  
            return $results;
          }

          public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE id = :category_id");
            
            $this->db->bind(':category_id', $category_id);
            $row=$this->db->single();

            return $row;   }
        
          public function getJob($id){
            $this->db->query("SELECT * FROM jobs WHERE id = :id");
            
            $this->db->bind(':id', $id);
            $row=$this->db->single();

            return $row; 
          }  
         //Insert data
        public function create($data){
          $this->db->query("INSERT INTO jobs(category_id,job_title,company,job_description,office_location,salary,
          contact_user,contact_email)VALUES (:category_id,:job_title,:company,:job_description,:office_location,:salary,
          :contact_user,:contact_email)");

            //Binding values
           $this->db->bind(':category_id',$data['category_id']);
           $this->db->bind(':job_title',$data['job_title']);
           $this->db->bind(':company',$data['company']);
           $this->db->bind(':job_description',$data['job_description']);
           $this->db->bind(':office_location',$data['office_location']);
           $this->db->bind(':salary',$data['salary']);
           $this->db->bind(':contact_user',$data['contact_user']);
           $this->db->bind(':contact_email',$data['contact_email']);
           //Execute query
           if($this->db->execute()){
             return true;
           }
           else{
             return false;
           }
        }  

        public function delete($id){

          $this->db->query("DELETE FROM jobs WHERE id = $id");
          if($this->db->execute()){
            return true;
          }
          else{
            return false;
          }
       }

       public function update($id,$data){
        $this->db->query("UPDATE jobs
        SET 
        category_id = :category_id,
        job_title = :job_title,
        company = :company,
        job_description = :job__description,
        office_location = :office_location,
        salary = :salary,
        contact_user = :contact_user,
        contact_email = :contact_email 
        WHERE id = $id");

          //Binding values
         $this->db->bind(':category_id',$data['category_id']);
         $this->db->bind(':job_title',$data['job_title']);
         $this->db->bind(':company',$data['company']);
         $this->db->bind(':job_description',$data['job_description']);
         $this->db->bind(':office_location',$data['office_location']);
         $this->db->bind(':salary',$data['salary']);
         $this->db->bind(':contact_user',$data['contact_user']);
         $this->db->bind(':contact_email',$data['contact_email']);
         //Execute query
         if($this->db->execute()){
           return true;
         }
         else{
           return false;
         }
      }  

  }

?>