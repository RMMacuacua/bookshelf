<script>
    function addToCart(nome){
        event.preventDefault();
        
        
        nItens_cart = parseInt(localStorage.getItem('itens'));
        
        var autor = document.getElementById("autorname").value;
        var titulo = document.getElementById("titulo").value;
        var preco = document.getElementById("preco").value;
        var idlivro = document.getElementById("idlivro").value;

        var livro = {id:idlivro , autor:autor, titulo:titulo, preco:preco, quantidade: 0};
        //console.log(livro);        

        if(nItens_cart){            
            nItens_cart = nItens_cart + 1;
        }else{
            nItens_cart = 1;
            
        }
        localStorage.setItem('itens',nItens_cart);

        let cartItems = localStorage.getItem('productsInCart');        
        cartItems = JSON.parse(cartItems);
        
        if(cartItems != null){ 

            if(cartItems[livro.id] == undefined){
                cartItems = {
                    ...cartItems,
                    [livro.id] : livro
                }
            }
            cartItems[livro.id].quantidade += 1;
        }else{
            livro.quantidade = 1;
            cartItems = {
                [livro.id]: livro
            }
        }
        
        localStorage.setItem("productsInCart", JSON.stringify(cartItems));
  
        cart_total(nItens_cart);

    }

    function cart_total(cart){
        console.log(cart);
    }

    function ListarCart(){
        let cartItems = localStorage.getItem('productsInCart');        
        cartItems = JSON.parse(cartItems);
        

        document.getElementById("cartList").innerText = null;
        var select2 = document.getElementById("cartList");
        
        
        //console.log(cartItems);
        for(i in cartItems){
            var el2 = document.createElement("td");
            el2.textContent = cartItems[i]["titulo"]+"  sim "+ cartItems[i]["autor"] + cartItems[i]["quantidade"];
            el2.value = cartItems[i]["autor"];
            select2.appendChild(el2);
            
        }
        
    }

    function tableCreate() {
        const body = document.body;
        var tbl = document.getElementById("cartList");
        let cartItems = localStorage.getItem('productsInCart');        
        cartItems = JSON.parse(cartItems);
        const sizeCart = Object.keys( cartItems ).length;
      
        var total = 0;
        for(i in cartItems){
            const tr = tbl.insertRow();
            const td1 = tr.insertCell();
            td1.innerHTML = cartItems[i]["titulo"];
            const td = tr.insertCell();
            td.innerHTML = '<input id="quantidade'+cartItems[i]["id"]+'" onChange="alterarQuantidade('+cartItems[i]["id"]+')" type="number" value="'+cartItems[i]["quantidade"]+'">';
            const td2 = tr.insertCell();
            td2.innerHTML = cartItems[i]["preco"];
            total +=  cartItems[i]["quantidade"]*cartItems[i]["preco"];
        }
        document.getElementById("totalDiv").innerHTML = total;
        
        //body.appendChild(tbl);
    }

    function alterarQuantidade(id_produto){
        var qtd = document.getElementById("quantidade"+id_produto);
        let cartItems = localStorage.getItem('productsInCart');        
        cartItems = JSON.parse(cartItems);
        //console.log(qtd.value);
        cartItems[id_produto]["quantidade"] = parseInt(qtd.value);
        //console.log(cartItems);

        var total = 0;
        for(i in cartItems){            
            total +=  cartItems[i]["quantidade"]*cartItems[i]["preco"];
        }
        document.getElementById("totalDiv").innerHTML = total;


        localStorage.setItem("productsInCart", JSON.stringify(cartItems));

    }

    function pagar(){
        event.preventDefault();
        let cartItems = localStorage.getItem('productsInCart');   
        //cartItems = JSON.parse(cartItems); 
        var headers = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        request = $.ajax({
            url: "/loja/checkout",
            type: "post",
            headers: headers,
            data: { cart: cartItems},
            success: function(result){
                    console.log(result);
                }
        });

        //console.log(Object.values(JSON.parse(cartItems)));
    }

</script>