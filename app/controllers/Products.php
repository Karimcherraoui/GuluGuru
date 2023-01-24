<?php



class Products extends Controller
{

    private $productModel;

    public function __construct()
    {
        if (!isLogged()) {

            redirect('/users/login');
        }
        $this->productModel = $this->model('Product');
    }
    
    public function add()
    {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
                // sanitize post array
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                var_dump($_FILES);
    
                move_uploaded_file($_FILES['image']['tmp_name'], '/var/www/html/glowguru/public/images/upload/' . $_FILES['image']['name']);

                
    
                $data = [
                    'name' => $_POST['name'],
                    'stock' => $_POST['stock'],
                    'price' => $_POST['price'],
                    'description' => $_POST['description'],
                    'image' => $_FILES['image']['name'],
                ];
    
                //$this->productModel->addProduct($data);
                // make sure no errors
                if ($this->productModel->addProduct($data)) {
                    redirect('Pages/product');
                } else {
                    //load view with errors
                    $this->view('pages/add', $data);
                }
            
        } else {
            $data = [
                'name' => '',
                'stock' => '',
                'price' => '',
                'description' => '',
                'image' => '',

            ];
            $this->view('pages/add', $data);
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize post array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/upload/' . $_FILES['image']['name']);

            $product = $this->productModel->findproductById($id);

            if (empty($_FILES['image']['name'])) {
                $data = [
                    'id' => $product->id,
                    'name' => trim($_POST['name']),
                    'stock' => trim($_POST['stock']),
                    'price' => trim($_POST['price']),
                    'description' => trim($_POST['description']),
                    'image' => $product->image,
                    'name_err' => '',
                    'stock_err' => '',
                    'price_err' => '',
                    'description_err' => '',
                    'image_err' => ''
                ];
            } else {
                $data = [
                    'id' => $product->id,
                    'name' => trim($_POST['name']),
                    'stock' => trim($_POST['stock']),
                    'price' => trim($_POST['price']),
                    'description' => trim($_POST['description']),
                    'image' => $_FILES['image']['name'],
                    'name_err' => '',
                    'stock_err' => '',
                    'price_err' => '',
                    'description_err' => '',
                    'image_err' => ''
                ];
            }
 
            //validate form
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }
            if (empty($data['stock'])) {
                $data['stock_err'] = 'Please enter stock';
            }
            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter price';
            }
            if (empty($data['description'])) {
                $data['description_err'] = 'Please enter description ';
            }

            //make sure no errors
            if (empty($data['name_err'])  && empty($data['stock_err']) && empty($data['price_err']) && empty($data['description_err'])) {
                if ($this->productModel->edit($data)) {
                    redirect('pages/product');
                } else {
                    die('something went wrong');
                }
            } else {
                //load view with errors
                $this->view('pages/editproduct', $data);
            }
        } else {
            $product =$this->productModel->findproductById($id);
       
        }
        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'stock' => $product->stock,
            'price' => $product->price,
            'description' => $product->description,
            'image' => $product->image,
            'name_err' => '',
            'stock_err' => '',
            'price_err' => '',
            'description_err' => '',
            'image_err' => ''

        ];
        $this->view('pages/editproduct', $data);
    }
    public function product()
    {
        $products= $this->productModel->getProduct();
        $data = [
        'products' => $products,
        ];
        $this->view('pages/product', $data);
    }
    public function delete($id) {
        // get response from data if deleted or not return true or false
        if ($this->productModel->delet($id)) {
            redirect('pages/product');
        } else {
            die('ops');
        }
    }

}