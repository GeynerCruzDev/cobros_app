export const RenderComponents = {
    renderComponentEditorOportunities : (selector, section) => {
      ClassicEditor.create( document.querySelector( selector),
            {
                removePlugins: ['Title'],
                language: 'es',
                ui:'es',
                image: {
                    resizeUnit: 'px',
                    toolbar: [ 'imageStyle:alignLeft', 'imageStyle:alignRight' ],
                    styles: [ 'full', 'alignLeft', 'alignRight' ]
                }
            }
        )
            .then( editor => {
                if(section == 'CompanyDescription'){window.CompanyDescription = editor}
                if(section == 'ApplicationDescription'){window.ApplicationDescription = editor}
                if(section == 'salesAnalyticDescription'){window.SalesAnalyticDescription = editor}
                if(section == 'utilityOperationalDescription'){window.UtilityOperationalDescription = editor}
                if(section == 'capacityPaymentDescription'){window.CapacityPaymentDescription = editor}
                if(section == 'liquidityDescription'){window.liquidityDescription = editor}
                if(section == 'leverageDescription'){window.LeverageDescription = editor}
                if(section == 'debHorizonDescription'){window.DebHorizonDescription = editor}
                if(section == 'financialCycleDescription'){window.FinancialCycleDescription = editor}
                if(section == 'paymentBehaviorDescription'){window.PaymentBehaviorDescription = editor}
                if(section == 'creditBureauDescription'){window.CreditBureauDescription = editor}
                if(section == 'recommendationsDescription'){window.RecommendationsDescription = editor}
            } )
            .catch( error => {
                console.error( error );
            } );
    },
};
