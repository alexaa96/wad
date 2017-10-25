<?php

require ("Model/BookModel.php");

class BookController {

    function CreateBookDropdownList() {
        $bookeModel = new BookModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a author: 
                    <select title = 'authors' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($bookModel->GetBookTypes()) .
                "</select>
                     <input author = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    function CreateBookTables($authors)
    {
        $bookModel = new BookModel();
        $bookArray = $bookModel->GetBookByType($authors);
        $result = "";
        
        //Generate a bookTable for each bookEntity in array
        foreach ($bookArray as $key => $book) 
        {
            $result = $result .
                    "<table class = 'bookTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$book->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$book->title</td>
                        </tr>
                        
                        <tr>
                            <th>Type: </th>
                            <td>$book->author</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$book->price</td>
                        </tr>
                        
                        <tr>
                            <th>Roast: </th>
                            <td>$book->category</td>
                        </tr>
                        
                        <tr>
                            <th>Origin: </th>
                            <td>$book->year</td>
                        </tr>
                        
                        <tr>
                            <td colspan='2' >$book->description</td>
                        </tr>                      
                     </table>";
        }        
        return $result;
 
    }

}

?>
