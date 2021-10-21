@include('loja.shared.scripts')
@include('loja.shared.header')

<body onLoad="tableCreate()">
  
</body>
<div class="container-fluid ">
  <div class="row justify-content-center">
  <div class="col-sm-8">
    <div class="card">
        <div class="card-header ">
        <h1>Cart</h1>
        </div>
        <div class="card-body">
             
        <table class="table" id="cartList">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Produto</th>
              <th scope="col">Quantidade </th>
              <th scope="col">Preço un</th>
            </tr>
          </thead>
          <tbody>
            
            
            <?php //$total += $item['price'] * $item['qty']; ?>
            
         
          </tbody>
        </table>

        <div>
            <strong>Total: <div id="totalDiv" ></div></strong><a  type="button" class="btn btn" href=""  onClick="pagar()" >resgatar</a>
        </div>

        </div>
        
    </div>
    </div>
    </div>
  </div>
</div>
